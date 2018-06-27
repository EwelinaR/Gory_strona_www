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

    <script src="static/js/JavaScript.js" type="text/javascript"></script>
</head>
<body>

    <div id="container">
        <header>
            <h1 id="gora">W górach jest wszystko co kocham</h1>
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
        <section id="sect">
           <h3>Czas na QUIZ!</h3>
		    <noscript>
                Quiz jest niedostępy. Wyłączona obsługa JavaScript w przeglądarce.
            </noscript>

           <h5 id="h5">Zasady gry:</h5>
            <p>
             Poniżej znajduje się 6 zdjęć pewnych szczytów. Twoim zadaniem jest wskazanie poprawnej nazwy góry.
            </p>
            

            <table class="bezkrawedzi">
                <tr>
                    <td>
                        <img src="static/images/other/quiz/giewont.jpg" alt="1" />
                        <label id="1" onclick="changeColor(this, 2)">Giewont</label>
                        <label class="rightLabel" id="2" onclick="changeColor(this, 1)">Rysy</label>
                    </td>
                    <td>
                        <img src="static/images/other/quiz/dolinahocholowska.jpg" alt="2" />
                        <label id="3" onclick="changeColor(this, 4)">Dolina Chochołowska</label>
                        <label class="rightLabel" id="4" onclick="changeColor(this, 3)">Dolina Kościeliska</label>
                       
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="static/images/other/quiz/dolinaRybiegoPotoku.jpg" alt="3" />
                        <label id="5" onclick="changeColor(this, 6)">Dolina Rybiego Potoku</label>
                        <label class="rightLabel" id="6" onclick="changeColor(this, 5)">Dolina Pięciu Stawów</label>
                        
                    </td>
                   
                    <td>
                        <img src="static/images/other/quiz/gerlach.jpg" alt="4" />
                        <label id="7" onclick="changeColor(this, 8)">Gerlach</label>
                        <label class="rightLabel" id="8" onclick="changeColor(this, 7)">Giewont</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="static/images/other/quiz/koscielec.jpg" alt="5" />
                        <label id="9" onclick="changeColor(this, 10)">Kościelec</label>
                        <label class="rightLabel" id="10" onclick="changeColor(this, 9)">Świnica</label>
                  
                    </td>
                    <td>
                        <img src="static/images/other/quiz/krzyzne.jpg" alt="6" />
                        <label id="11" onclick="changeColor(this, 12)">przełęcz Zawrat</label>
                        <label class="rightLabel" id="12" onclick="changeColor(this, 11)">przełęcz Krzyżne</label>
                  
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="static/images/other/quiz/mnich.jpg" alt="7" />
                        <label id="13" onclick="changeColor(this, 14)">Mnich</label>
                        <label class="rightLabel" id="14" onclick="changeColor(this, 13)">Żabia Grań</label>

                    </td>
                    <td>
                        <img src="static/images/other/quiz/rysy.jpg" alt="8" />
                        <label id="15" onclick="changeColor(this, 16)">Krywań</label>
                        <label class="rightLabel" id="16" onclick="changeColor(this, 15)">Rysy</label>

                    </td>
                </tr>
            </table>
           
            <label id="spr" onclick="sprawdz()">SPRAWDŹ</label>

        </section>
      
        <footer>
            Ewelina Rucińka
        </footer>
    </div>

</body>
</html>
