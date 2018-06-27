<?php 
	function getDb(){
		$mongo = new MongoClient(
		"mongodb://localhost:27017/",
		['username' => 'wai_web',
		'password' => 'w@i_w3b',
		'db' => 'wai',
		]);
		$db = $mongo->wai;
		return $db;
	}
	
	
	function logButton(){
		if(!isset($_SESSION['id'] )){
			echo '<a href="login.php">ZALOGUJ</a>';
		}
		else {
			echo '<a href="logout">WYLOGUJ</a>';
		}
	}
	
	function nowLog(){
		if(isset($_SESSION['nowLogin'])){
			echo '<p>Zostałeś poprawnie zalogowany jako '.$_SESSION['login'].'</p>';
			unset($_SESSION['nowLogin']);
		}
	}
	
	function takeUserPass($login){
		$db = getDb();

		if($user = $db -> users -> findOne(['login' => $login]))
			return $user['password'];	
		else 
			return false;
	}
	
	function loginUser($login, $pass, &$notice){
		$db = getDb();
		$dbPass = takeUserPass($login);
		if(!$dbPass){
			$notice['login']='błędny login lub hasło';
		}
		else if(!password_verify($pass, $dbPass)){	
			$notice['login'] = 'błędny login lub hasło';
		}
		else{
			$user = $db -> users ->findOne(['login' => $login]);
			session_regenerate_id();
			$_SESSION['id'] = $user['_id'];
			$_SESSION['login']=$login;
			$_SESSION['nowLogin'] = 1;
		}
		
	}
	function registerUser(&$notice, $user){
		$register = true;
		if(strpos($user['email'], '@') <= 0){
			$register = false;
			$notice['email'] = 'niepoprawny e-mail</br>';
		}
		if($user['pass'] != $user['rep_pass']){
			$register = false;
			$notice['pass'] = 'hasła są niejednakowe</br>';
		}
		if(takeUserPass($user['login'])){
			$register = false;
			$notice['log'] = 'nazwa uzytkownika jest juz zajeta</br>';
		}
		if($register){
			$hash = password_hash($user['pass'], PASSWORD_DEFAULT);
			$newUser = [
				'email' => $user['email'],
				'login' => $user['login'],
				'password' => $hash,
			];
			$db = getDb();
			$db -> users -> insert($newUser);
			loginUser($user['login'], $user['pass'], $notice);
		}
	}
	
	

?>