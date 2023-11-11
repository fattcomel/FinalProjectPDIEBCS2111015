<?php

require_once("config.php");
session_start();

if(!isset($_SESSION["admin_name"])){
	header("Location: displaychildren.php");
  }
else{

	$eid = $_GET['eid'];
	$descr = $_GET['descr'];

	$add_to_db = mysqli_query($conn,"UPDATE child_form SET status='Accepted' WHERE id='".$id."' AND status='".$status."'");

				if($add_to_db){	
					echo 'Saved!!';
					header("Location: displaychildren.php");
				}
				else{
					echo "Query Error : " . "UPDATE status SET status='Accepted' WHERE id='".$id."' AND descr='".$status."'" . "<br>" . mysqli_error($conn);
				}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
         
?>