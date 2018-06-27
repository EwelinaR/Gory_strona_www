<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Tatry</title>

    <meta name="description" content="Strona poświęcona Tatrom. Jest poświęcona dla wszystkich, którzy chcą się czegoś dowiedzieć o naszych pięknych górach." />
    <meta name="keywords" content="góra, góry, Tatry, wycieczki, turystyka, szczyty, zdięcia górskie, schroniska"/>
    <meta charset="UTF-8" />
    <meta name="author" content="Ewelina Rucińska"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

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
           <?php nowLog();?>
            <h2>Tatry</h2>
                <img class="cytat" src="static/images/other/cyt.jpg" alt="cytat"/>

            
            <p>
                Myślę, że Tatry nie trzeba nikomu przedstawiać. Turystów w tych okolicach nigdy nie brakuje.
                Wszyscy na pewno kojarzą Tatry z: Zakopanym - a dokładnie Krupówki, Giewont i Morskie Oko.
                Są to najbardziej popularne miejsca na Podhalu. Na dowód wstawiam te zdięcia:  
            </p>
            <img class="toLeft" src="static/images/other/GiewontKolejka.jpg" alt="kolejka na Giewont"/>
            <img src="static/images/other/tlumyMorskieOko.jpg" alt="tłumy nad Morskim Oku"/>
            <img src="static/images/other/krupowki.jpg" alt="tłumy na Krupówkach"/>
            
             <p>
               
                No ale przecież nic dziwnego, że to jest tak oblegane. W końcu tu jest pięknie!!
                <br/>
            </p>
            <img src="static/images/other/KrupowkiNoca.jpg" alt="Krupówki nocą"/>
            <img src="static/images/other/giewont.jpg" alt="Widok na Giewont"/>
            <img src="static/images/other/morskieOko.jpg" alt="Morskie Oko z góry"/>

         
          
        </section>
        <footer>
            Ewelina Rucińka
        </footer>
    </div>
</body>
</html>
