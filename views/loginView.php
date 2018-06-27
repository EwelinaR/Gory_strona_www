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
                logowanie
            </h3>
            <div class="toLeft logowanie">
				<h2>logowanie</h2>
				<form name="logowanie" action="login" method="post">
					<p><?php if(isset($notice['login'])) echo $notice['login']; ?></p></br>
					<label>Login: <input type="text" name="login" required/></label></br></br>
					<label>Hasło: <input type="password" name="password" required /></label></br></br>
					<input name="zaloguj" value="zaloguj" type="submit">
				</form>
			</div>
				
			<div class="toLeft logowanie">
			<h2>rejestracja</h2>
				<form name="rejestracja" action="register" method="post">
					<label>Adres e-mail: <input type="text" name="email" required/></label></br>
					<p><?php if(isset($notice['email'])) echo $notice['email']; 
							else echo '</br>'; ?></p></br>
					<label>Login: <input type="text" name="login" required/></label></br>
					<p><?php if(isset($notice['log'])) echo $notice['log']; 
							else echo '</br>';?></p></br>
					<label>Hasło: <input type="password" name="password" required /></label></br></br>
					<label>Powtórz hasło: <input type="password" name="repetition_password" required /></label></br>
					<p><?php if(isset($notice['pass'])) echo $notice['pass']; 
							else echo '</br>';?></p></br>
					<input name="zarejestruj" value="zarejestruj" type="submit">
				</form>
			</div>

        </section>
        <footer>
            Ewelina Rucińka
        </footer>
    </div>

</body>
</html>
