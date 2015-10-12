<?php
	/* Database configuration */
	function getDB(){
		// Insert your DB configuration settings here
		$db = new MysqliDb ('localhost', 'root', '', 'schakal');
		return $db;
	}

	
?>