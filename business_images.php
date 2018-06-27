<?php

function showMiniatures(&$model, $type){
	$dir = __DIR__.'/web/static/images';
    if ( file_exists( $dir ) == false ) {
       $model = 'Directory \''.$dir.'\' not found!';
    } 
	else {
	$dir_contents = scandir( $dir );
		$number = 1;
		$db = getDb();
        foreach ( $dir_contents as $file ) {
			if(substr($file, strlen($file)-6,6) == '_m.jpg' || substr($file, strlen($file)-6,6) == '_m.png'){
				$name = substr($file,0, strlen($file)-6).'.'.takeExtension($file);			
				$query = ['name' => $name,];
				$images = $db->images->findOne($query);
				$id = $images['_id'];
				if(($type == 'myMiniatures' && isset($_SESSION["$id"])) || $type == 'miniatures'){
					$checked ='';
					if(!isset($images['priv']) || ( isset($_SESSION["login"]) && $images['priv'] == $_SESSION["login"])){
						if(isset($_SESSION["$id"]) && $type == 'miniatures'){
							$checked = ' checked ';
						}
						$author = '';
						$title = '';
						if(isset($images['author']))
							$text = '</br>'.$images['author'].'<br/>';
						else
							$text = '</br></br>';
						if(isset($images['author']))
							$text = $text.$images['title'];
					
						if(isset($images['priv']))
							$text = '</br>(zdjecie prywatne)'.$text;
						$model = $model.'<tr><td class="check"><input type="checkbox" name="img[]" value="'.$images['_id'].'"'.$checked.'/></td><td><a href="#image'.$number.'"><img src="static/images/'.$file.'" alt="zdjęcie'.$number.'" /></a></p>'.$text.'</td></tr>';
						$number++;
					}
				}
			}
		}
	}
}

function showGalery(&$model, $type){
	$dir = __DIR__.'/web/static/images';
    if ( file_exists( $dir ) == false ) {
       $model = 'Directory \''.$dir.'\' not found!';
    } 
	else {
		$dir_contents = scandir( $dir );
		$number = 1;
		$db = getDb();
        foreach ( $dir_contents as $file ) {
			
			if(substr($file, strlen($file)-6,6) == '_z.jpg' || substr($file, strlen($file)-6,6) == '_z.png'){
				$name = substr($file,0, strlen($file)-6).'.'.takeExtension($file);
				$query = ['name' => $name,];
				$images = $db->images->findOne($query);
				$id = $images['_id'];
				if(($type == 'myGalery' && isset($_SESSION["$id"])) || $type == 'galery'){
					if(!isset($images['priv']) || ( isset($_SESSION['login']) && $images['priv'] == $_SESSION['login'])){					
						$model = $model.'<li id="image'.$number.'"><img src="static/images/'.$file.'" alt="zdjęcie'.$number.'"/></li>';
						$number++;
					}
				}
			}
		}
	}
}

	function checkFile(&$notice, &$error, $image){
		if($image['type'] != 'image/png' && $image['type'] != 'image/jpeg'){
			$notice = $notice."<br/>zdjęcie ma zły format";
			$error = true;
			
		}					
		if($image['size'] > 1048576){
			$notice =  $notice."<br/>zdjęcie ma za duży rozmiar";
			$error = true;
		}
	}
	
	function addImage(&$image, &$notice){
		$dir = __DIR__."/web/static/images/";
		$image['newName'] = $image['name'];
		$db = getDb();
		
		$image['shortName'] = substr($image['name'], 0, strlen($image['name'])-4);
		$image['extension'] = takeExtension($image['name']);
		$image['name'] = $image['shortName'].'.'.$image['extension'];
		$image['newName'] = $image['shortName'].'.'.$image['extension'];

		for($j = 1; $db -> images -> findOne(['name' => $image['newName']]); $j++){
			$image['newName'] = $image['shortName'].$j.'.'.$image['extension'];
		}
	
		$target = $dir.$image['newName'];
		
		if(move_uploaded_file($image['tmp_name'], $target))
			$notice =  "<br/>zdjęcie ".$image['name']." przesłano prawidłowo";
		
		$image['name'] = $image['newName'];
		$image['shortName'] = substr($image['name'], 0, strlen($image['name'])-4);
	}
	
	function addMiniature($image){
		$dir = __DIR__."/web/static/images/";
		list($width,$height) = getimagesize($dir.$image['name']);
		$miniature = imagecreatetruecolor(200, 125);
		if($image['extension'] == 'png')
			$src = imagecreatefrompng($dir.$image['name']);
		else
			$src = imagecreatefromjpeg($dir.$image['name']);
		imagecopyresized ($miniature,  $src , 0 ,0 , 0 , 0 , 200 , 125 , $width , $height );
		if($image['extension'] == 'png')
			imagepng($miniature,  $dir.$image['shortName'].'_m.'.$image['extension']);
		else 
			imagejpeg($miniature,  $dir.$image['shortName'].'_m.'.$image['extension']);
		imagedestroy($src);
		imagedestroy($miniature);
		move_uploaded_file($miniature['tmp_name'], $dir.$image['shortName'].'_m.'.$image['extension']);
	}
	
	function addWatermark($image){
		$dir = __DIR__."/web/static/images/";
		list($width,$height) = getimagesize($dir.$image['name']);
		$target = $dir.$image['name'];
		$imageProperties = imagecreatetruecolor($width, $height);
		if($image['extension'] == 'jpg')
			$targetLayer = imagecreatefromjpeg($target);			
		else
			$targetLayer = imagecreatefrompng($target);	
		imagecopyresampled($imageProperties, $targetLayer, 0, 0, 0, 0, $width, $height, $width, $height);
		$watermarkColor = imagecolorallocate($imageProperties, 191,191,191);
		imagestring($imageProperties, 5, 100, $height - 60, $image['znak'], $watermarkColor);
				
		imagecopymerge($imageProperties, $targetLayer,  0, 0, 0, 0, $width, $height, 20);
		
		if($image['extension'] == 'png')
			imagepng($imageProperties, $dir.$image['shortName'].'_z.'.$image['extension']);
		else
			imagejpeg($imageProperties, $dir.$image['shortName'].'_z.'.$image['extension']);
		imagedestroy($targetLayer);
		imagedestroy($imageProperties);
		
		move_uploaded_file($imageProperties['tmp_name'], $dir.$image['shortName'].'_z.'.$image['extension']);

	}
	
	function saveImageToDb(&$img, $priv){
		$db = getDb();
		$image = [
			'name'=> $img['name'],
			'title' => $img['tytul'],
			'author'=>$img['autor'],
		];
		if(isset($img['priv']))
			$image['priv'] = $_SESSION['login'];
		
		$db -> images -> insert($image);
	}
	
	function takeExtension($name){
		if(strtolower(substr($name, strlen($name)- 3,3)) == 'png')
			return 'png';
		else
			return 'jpg';
	}



?>