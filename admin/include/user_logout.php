<?php
session_start();
if(!isset($_SESSION['staff_username'])=="")
{
  	
	unset($_SESSION['staff_username']);
	session_destroy();
	//header('location:../index.php');
}
header('location:../');