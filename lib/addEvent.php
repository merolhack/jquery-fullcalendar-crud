<?php

	// Require DB Connection  
	
	require_once('connect.php');

	// Fetch all events
	
	$sth = $dbh->prepare("INSERT INTO events (title, description, events.date) VALUES (?,?,?)");
		
	$sth->execute(array($_POST['title'], $_POST['description'], $_POST['date']));
	