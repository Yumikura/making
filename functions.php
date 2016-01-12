<?php
	
	$dsn = 'mysql:dbname=sport_boules;host=localhost';
	$user = 'root';
	$pass = '';
		
	$dbh = new PDO($dsn,$user,$pass);
	$pass = '';
	
	$dbh = new PDO($dsn,$user,$pass);
	
	
	function h($v){
		return htmlspecialchars($v,ENT_QUOTES);
	}