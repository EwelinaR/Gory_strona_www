<?php
require_once "business_images.php";
require_once "business.php";

function start(&$model){
	
	return 'startView';
}

function top(&$model){
	return 'topView';
}

function description(&$model){
	return 'descriptionView';
}

function quiz(&$model){
	return 'quizView';
}

function preparing(&$model){
	return 'preparingView';
}

function galery(&$model){
	$notice1 ='';
	$notice2 ='';
	
	if(isset($_POST['remember'])){
		foreach($_POST['img'] as $img){
				$_SESSION["$img"] = 1;
		}
	}
	showMiniatures($notice1, 'miniatures');
	showGalery($notice2, 'galery');
	
	$model['miniatures']=$notice1;
	$model['images']=$notice2;
	return 'galeryView';
}

function myGalery(&$model){
	$notice1 ='';
	$notice2 ='';
	
	if(isset($_POST['forget'])){
		foreach($_POST['img'] as $img){
			unset($_SESSION["$img"] );
		}
	}
	showMiniatures($notice1, 'myMiniatures');
	showGalery($notice2, 'myGalery');

	$model['miniatures']=$notice1;
	$model['images']=$notice2;
	
	return 'myGaleryView';
}

function galeryAdding(&$model){
	$notice='';
	$error = false;
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$image = $_FILES['zdjecie'];
		$image['znak'] =  $_POST['znak'];
		$image['autor'] = $_POST['autor'];
		$image['tytul'] = $_POST['tytul'];
		

		if(isset($_POST['type']) && $_POST['type'] == 'private'){
			$priv = $_POST['type'];
			$image['priv'] = $_SESSION['login'];	
		}
		else
			$priv = false;
		
		checkFile($notice, $error, $image);
		
		if($error == false){
			addImage($image, $notice);
			addWatermark($image);
			addMiniature($image);
			saveImageToDb($image, $priv);
		}
	}
	$model['notice'] = $notice;
	return 'galeryAddingView';
}

function logout(&$model){
	session_destroy();
	return 'redirect:startView.php';

}

function logphp(&$model){
	if(isset($_SESSION['notice'])){
		$model['notice'] = $_SESSION['notice'];
		unset($_SESSION['notice']);
	}
	return 'loginView';
}

function login(&$model){
	
	loginUser($_POST['login'], $_POST['password'], $notice);
	if($notice){
		$_SESSION['notice'] = $notice;	
	}
	if(isset($_SESSION['id'] ))
		return 'redirect:startView.php';
	else
		return 'redirect:login.php';
	
}

function register(&$model){

	$user = [
		'email' =>$_POST['email'],
		'login' => $_POST['login'],
		'pass' => $_POST['password'],
		'rep_pass' => $_POST['repetition_password'],
	];
	registerUser($notice, $user);
	if($notice)
		$_SESSION['notice'] = $notice;
	if(isset($_SESSION['id'] ))
		return 'redirect:startView.php';
	else
		return 'redirect:login.php';
}

?>