<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Tatry</title>

    <meta name="description" content="Strona poświęcona Tatrom. Jest poświęcona dla wszystkich, którzy chcą się czegoś dowiedzieć o naszych pięknych górach." />
    <meta name="keywords" content="góra, góry, Tatry, wycieczki, turystyka, szczyty, zdięcia górskie, schroniska"/>
    <meta charset="UTF-8" />
    <meta name="author" content="Ewelina Rucińska"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
   
     <link rel="icon" href="static/images/other/favicon.gif" type="image/x-icon"/>
    <link rel="stylesheet" href="static/css/style.css" type="text/css" />

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="static/js/JQuery.js" type="text/javascript"></script>

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
        <section>
          <h3>Co zrobić by wejść na szczyt?</h3>
            <p>Kto chciałby zdobyć jakiś szczyt? Na pewno wszyscy, którzy trafili na tą stronę. <br/></p>


            <p>Ale jak to osiągnąć?
            Należy się do tego odpowiednio przygotować, wtedy sama podróż staje się prostrza i mniej niebezpieczna! 
            Mapa, jedzenie, odpowiednie ubranie - to tylko najbardziej podstawowe aspekty dobrego przygotowania. 
            Poniżej znajduje się opis porządnego przygotowania się do wyprawy. Zapraszam do czytania:
            </p>

            <div id="accordion">
                <h4>Planuj trasę</h4>
                <div>
                    <p>
                        Mapa tyrystyczna, to coś co każdy powinien mieć. Osobiście nie przepadam za elektronicznymi wersjami, a tym bardziej
                        gdy całkowicie zastępują one papierową wersje. To kwestia gustu, jednak należy się wtedy zaopatrzyć na naładowany sprzęt
                        elektroniczny.
                    </p>
                    <p>
                        Na szlak najlepiej wyjść wcześnie rano i choć sadyzmem wydaje się wstawanie o strasznej godzinie, kiedy jest jeszcze
                        ciemno, ma to swoje sensowne uzasadnienie. Po pierwsze: ominiemy innych ludzi. No bo w góry nie idzie się po to,
                        by się o nich na każdym kroku potykać. Zasada jest prosta – im bardziej popularna trasa, tym wcześniej stawiamy się na jej
                        starcie. Kiedy leniuchy będą jeszcze przekręcały się z jednego boku na drugi, my będziemy już hen, daleko, w spokoju napawać
                        się pięknem przyrody. Po drugie: więcej czasu na marsz, to więcej czasu na odpoczynek i wylegiwanie się na trawie
                    </p>
                </div>
                <h4>Pogoda</h4>
                <div>
                    <p>
                        Najlepiej pogodę sprawdzić (w kilku różnych źródłach) wieczorem, przed wyjazdem, a dla pewności jeszcze raz rano na
                        kamerkach internetowych (a jest ich coraz więcej). Oczywiście, chodzenie po górach w deszczu może być zabawne, ale
                        równocześnie staje się bardziej niebezpieczne – mokre skały są mało sympatyczne, takoż błotniste ścieżki. Nie mówiąc
                        już o tym, że w góry idzie się m.in. po to, by podziwiać piękne widoki. Kiedy brodzi się w chmurach jest to średnio
                        możliwe.
                    </p>
                </div>
                <h4>Buciki</h4>
                <div>
                    <p>
                        Śmiało można zaryzykować teorię, że buty to najważniejszy element górskiego wyposażania. Jeżeli są niewygodne,
                        to obcierają i człowiek skupia się tylko na tym, że mu źle. Jeżeli przemakają na deszczu, to jest zimno i można złapać
                        bolesne skurcze, które wcale nie ułatwiają marszu. Jeżeli są za ciężkie, to trudniej oderwać stopy od ziemi i idzie się
                        o wiele wolniej. Jeżeli nie są ponad kostkę, to o wiele łatwiej ją skręcić i na tym zakończyć wycieczkę. Jeżeli nie są
                        przystosowane do trudniejszego terenu (twarda podeszwa), to czuć pod stopą każdy kamień, co jest cholernie irytujące.
                    </p>
                </div>
                <h4>Plecak</h4>
                <div>
                    <p>
                        No właśnie: co ze sobą zabrać? Mapę i kompas – żeby zawsze widzieć, w którym miejscu się jest, jak iść dalej lub jak
                        wrócić. Apteczkę pierwszej pomocy – nigdy nie wiadomo, kiedy będziemy musieli komuś pomóc lub kiedy ktoś będzie musiał
                        pomóc nam (przezorny zawsze ubezpieczony).
                    </p>
                    <p>
                        Dobra wiadomość dla łasuchów – w górach bezkarnie można objadać się czekoladą, która w kryzysowych momentach doda nam
                        trochę energii. Oczywiście, nie samymi słodyczami żyje człowiek, dlatego najlepiej zaopatrzyć się jedzenie, które
                        faktycznie postawi nas na nogi. Kiedy człowiek wpina się na szczyt, to się męczy – a jak się męczy, to się poci. Żeby
                        się nie odwodnić ZAWSZE należy mieć ze sobą coś do picia, przy czym najlepiej sprawdzi się najzwyklejsza w świecie woda
                        mineralna a w chłodniejsze dni herbata w termosie, która działa rozgrzewająco.
                    </p>
                </div>
                <h4>Jeszcze szczypta bezpieczeństwa</h4>
                <div>
                    <p>
                        W góry chodzi się po to, żeby zdobywać szczyty, ale też po to, żeby z nich bezpiecznie wrócić – po to, żeby mieć
                        okazję wejść na kolejne. Góry nie uciekną. Poczekają tydzień, miesiąc a nawet rok. Jeżeli pogoda jest bardzo kiepska,
                        wyjście na szlak lepiej sobie odpuścić (lub zawrócić z niego, gdy trafimy na załamanie pogody – o ile mamy taką
                        możliwość). Zwłaszcza wtedy, kiedy dopiero zaczynamy swoją przygodę z trekkingiem i nie mamy zbyt wielkiego doświadczenia
                        w poruszaniu się po śliskich skałach, czy oblodzonych/błotnistych ścieżkach. Dobrą praktyką jest informowanie bliskich,
                        gdzie wyruszamy, na jak długo i o której godzinie powinniśmy być z powrotem. Jeżeli przydarzy nam się coś złego, o wiele
                        łatwiej będzie nas znaleźć. Również z tego powodu powinno znać się swoje aktualne położenie i na bieżąco śledzić na
                        mapie, gdzie jesteśmy. Wyżej wspominałam o naładowanym telefonie. Warto zapisać sobie w nim numery alarmowe do
                        GOPR-u/TOPR-u: 985 lub +48 601 100 300.
                    </p>
                </div>
            </div>
            <a href="http://tpn.pl/" target="_blank"><img id="nrTopr" class="link" src="static/images/other/goprNr.jpg" alt="numer telefonu ratunkowego w górach" /></a>

        </section>
        <footer>
            Ewelina Rucińka
        </footer>
    </div>

</body>
</html>
