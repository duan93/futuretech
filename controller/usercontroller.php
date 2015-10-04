<?php
include '../model/connect.php';
include '../model/product.php';
session_start();

if(isset($_POST["action"]))
	$action = $_POST["action"];
elseif (isset($_GET["action"]))
 	$action = $_GET["action"];
 else
 	$action = "newList";

 $_SESSION[""] = "";

 switch ($action) {
 	case 'home':
 		include "../view/";
 		break;
 	case 'newList':
 		include "../view/";
 		break;
 	case 'contact':
 		include "../view/";
 		break;

 }
?>