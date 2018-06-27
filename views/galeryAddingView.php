<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Tatry</title>

    <meta name="description" content="Strona poświęcona Tatrom. Jest poświęcona dla wszystkich, którzy chcą się czegoś dowiedzieć o naszych pięknych górach." />
    <meta name="keywords" content="góra, góry, Tatry, wycieczki, turystyka, szczyty, zdięcia górskie, schroniska"/>
    <meta charset="UTF-8" />
    <meta name="author" content="Ewelina Rucińska"/>
    
    <link rel="icon" href="images/other/favicon.gif" type="image/x-icon"/>
    <link rel="stylesheet" href="static/css/style.css" type="text/css" />
</head>
<body>

    <div id="container">
        <header>
            <h1>W górach jest wszystko co kocham</h1>
            <h3>wszystko co jest związane z Tatrami</h3>

        </header>
        <nav>
            <ol class="menu">
                <li><a href="startView.php"><img src="static/images/other/home.png" alt="Start" /></a></li>
                <li>
					GALERIA
                    <ul>
                        <li><a href="galeryView.php">GALERIA</a></li>
                        <li><a href="galeryFormView.php">PRZESLIJ</a></li>
						<li><a href="myGaleryView.php">MOJE</a></li>
                    </ul>
                </li>
                <li>
                    SZCZYTY
                    <ul>
                        <li><a href="topView.php">TOP 10</a></li>
                        <li><a href="descriptionView.php">OPISY</a></li>
                    </ul>
                </li>
                <li><a href="preparingView.php">PRZYGOTOWANIE</a></li>
            </ol>
			<p  id="log">
		        <?php logButton() ?>
			</p>
        </nav>
        <section>
            <h3>
                galeria - przesyłanie zdjęć
            </h3>
			<div id="form">
            <form method="post" enctype="multipart/form-data">
                <label>
                    <span>Zdjęcie:</span>
                    <input type="file" name="zdjecie" required/>
                </label>
                <br/><br/>
				<label>
                    <span>Znak wodny:</span>
                    <input type="text" name="znak" required/>
                </label>
                <br/><br/>
                <label>
                    <span>Tytuł:</span>
                    <input type="text" name="tytul" />
                </label>
                <br/><br/>
                <label>
                    <span>Autor:</span>
                    <input type="text" name="autor" <?php if(isset($_SESSION['id'])) echo 'value="'.$_SESSION['login'].'"';?>/>
                </label>
                <br/><br/>
				<?php if(isset($_SESSION['id'])){
					echo '<label>
							<input type="radio" name="type" value="public" checked />
							<span> zdjęcie publiczne</span>
						</label>
						<br/>
						<label>
							<input type="radio" name="type" value="private" />
							<span> zdjęcie prywatne</span>
						</label>
						<br/><br/>';
				}
				?>
                <input type="submit" name="id" value="przeslij" >
            </form>
			</div>
			<?= 
				$notice; 
			?>
			
        </section>
        <footer>
            Ewelina Rucińka
        </footer>
    </div>

</body>
</html>
