<?php
	
	$dsn = 'mysql:dbname=sport_boules;host=localhost';
	$user = 'root';
	
	$dbh = new PDO($dbh,$user);
	
	
	function h($v){
		return htmlspecialchars($v,ENT_QUOTES);
	}