<?php
	session_start();
	// mysql_connect("localhost","root","root");
	// mysql_select_db("mydatabase");

	require_once '../lib/DB.php';
	$db=new DB();

	$sql = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$db->query($sql);
	$objResult = $db->fetch_array();
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult[0]["UserID"];
			$_SESSION["Status"] = $objResult[0]["Status"];
		// echo $objResult[0]["Status"];

			session_write_close();
			
			if($objResult[0]["Status"] == "ADMIN")
			{
				header("location:../admin.php");
			}
			else
			{
				header("location:../index.php");
			}
	}
	mysql_close();
?>