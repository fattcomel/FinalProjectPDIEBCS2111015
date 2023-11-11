<?php

require_once("config.php");
session_start();

if(!isset($_SESSION["admin_user"])){
	header("Location: displaychildren.php");
  }
else{

$id = $_GET['id'];
$status = $_GET['status'];

$add_to_db = mysqli_query($conn,"UPDATE child_form SET status='Rejected' WHERE id='".$id."' AND status='".$status."'");
	
			if($add_to_db){	
			  echo "Saved!!";
			  header("Location: displaychildren.php");
			}
			else{
			  echo "Query Error : " . "UPDATE status SET status='Rejected' WHERE id='".$id."' AND status='".$status."'" . "<br>" . mysqli_error($conn);
			}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
		 
?>

