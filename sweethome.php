<?php session_start(); ?>
<html lang="en-US">
<?php
include ( "Awskomfunction/connection.php" );
include ( "Awskomfunction/Awskom.php" );
if (!isset( $_SESSION['user_email'] ) ) {
include( "forum/header.php" );
include("Awskomfunction/homebevorelogin.php");?>
<?php  
}else {
include ( "head/header/header.php" );
include ("Awskomfunction/home.php"); ?>
<?php include ("footer.php"); }  ?>
