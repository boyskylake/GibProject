<?php
	// session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN")
	{
		echo "This page for Admin only!";
		exit();
	}	
	
	// require_once '../lib/DB.php';
	// $db = new DB();

	// $sql = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	// $db->query($sql);
	// $objResult = $db->fetch_array();
?>