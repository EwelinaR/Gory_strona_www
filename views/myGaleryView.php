<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Tatry</title>

    <meta name="description" content="Strona poświęcona Tatrom. Jest poświęcona dla wszystkich, którzy chcą się czegoś dowiedzieć o naszych pięknych górach." />
    <meta name="keywords" content="góra, góry, Tatry, wycieczki, turystyka, szczyty, zdięcia górskie, schroniska"/>
    <meta charset="UTF-8" />
    <meta name="author" content="Ewelina Rucińska"/>

    <link rel="icon" href="static/images/other/favicon.gif" type="image/x-icon"/>
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
                moja galeria
            </h3>
			
			 <table class="galery">
				<tr>
					<td>
						<ul id="galeria">
							<?= $images
							?>
						</ul>
					</td>
					<td class="galeryRight">
						<form method="post" >
							<input type="submit" name="forget" value="Usuń zaznaczone z zapamiętanych"/>
							<div id="miniatury">
								<table id="listaMiniatur">
									<?= $miniatures ?>
								</table>
							</div>
						</form>
					</td>
				</tr>
			</table>
			

        </section>
        <footer>
            Ewelina Rucińka
        </footer>
    </div>

</body>
</html>
