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
            <h3>Top 5 najwyższych szczytów</h3>
            <p>
                Jeżeli zastanawiałeś się kiedyś, jakie szczyty w Tatrach są najwyższe to dobrze trafiłeś!!
                <br /> Poniżej masz wszytstko wypisane w przejżystej tabeli.
                Wypisałam tylko te szczyty, ktore leżą w Polsce lub na granicy polsko-słowackiej. Cociaż tak naprawdę największy wieszchołek całkowicie
                położony w Polsce to Kozi Wierch mający zaledwie 2291m n. p. m.. Tak więc praktycznie wszystkie wypisane góry leżą na granicy.
                <br />
                W kolumnie "dostępność" napisałam czy zwykly turysta może wejść na ten szczyt - czyli czy prowadzi tam jakiś oznakowany szlak.
                Na resztęszczytów "brak szlaku" często wchodzą taternicy.
            </p>
            <table>
                <caption>top 10 szczytów w Tatrach polskich  (włącznie ze szczytami granicznymi)</caption>
                <tr>
                    <th>nr</th>
                    <th>polska nazwa</th>
                    <th>słowacka nazwa</th>
                    <th>wysokość n.p.m.</th>
                    <th>dostępność</th>
                    <th>pierwsze wejście (rok)</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td> Rysy</td>
                    <td>Rysy</td>
                    <td>2499 m</td>
                    <td>dostępny</td>
                    <td>1840</td>
                </tr>
                <tr class="parzysta">
                    <td>2</td>
                    <td> Mięguszowiecki Szczyt Wielki</td>
                    <td>Veľký Mengusovský štít</td>
                    <td> 2438 m</td>
                    <td>dostępny</td>
                    <td>1877</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td> Niżne Rysy</td>
                    <td>Malé Rysy, Nižné Rysy</td>
                    <td> 2430 m</td>
                    <td>brak szlaku</td>
                    <td>1905</td>
                </tr>
                <tr class="parzysta">
                    <td>4</td>
                    <td> Mięguszowiecki Szczyt Czarny </td>
                    <td>Východný Mengusovský štít</td>
                    <td> 2410 m</td>
                    <td>dostępny</td>
                    <td>1903</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td> Mięguszowiecki Szczyt Pośredni </td>
                    <td>Prostredný Mengusovský štít</td>
                    <td> 2393 m</td>
                    <td>brak szlaku</td>
                    <td>1903</td>
                </tr>
                <tr class="parzysta">
                    <td>6</td>
                    <td>Hińczowa Turnia</td>
                    <td>Hincova veža</td>
                    <td>2377 m</td>
                    <td>brak szlaku</td>
                    <td>1903</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td> Cubryna </td>
                    <td>Čubrina</td>
                    <td>2376 m </td>
                    <td>brak szlaku</td>
                    <td>1884</td>
                </tr>
                <tr class="parzysta">
                    <td>8</td>
                    <td> Wołowa Turnia </td>
                    <td>Volia veža</td>
                    <td> 2373 m</td>
                    <td>dostępny</td>
                    <td>1905</td>
                </tr>
               
                <tr>
                    <td>9</td>
                    <td> Żabia Turnia Mięguszowiecka </td>
                    <td>Žabia veža</td>
                    <td> 2335 m</td>
                    <td>dostępny</td>
                    <td>1905</td>
                </tr>
                <tr class="parzysta">
                    <td>10</td>
                    <td>Świnica </td>
                    <td>Svinica</td>
                    <td>2301 m</td>
                    <td>dostępny</td>
                    <td>1867</td>
                </tr>
                
            </table>



        </section>
        
        <footer>
            Ewelina Rucińka
        </footer>
    </div>

</body>
</html>
