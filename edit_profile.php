<?php 
	session_start(); 
	include ( "Awskomfunction/connection.php" );
include ( "Aw-func/Aw.php" );
	if ( !isset( $_SESSION['user_email'] ) ) {
		header( "location: index.php" );
	}else {
        include( "forum/header.php" );
		include ( "head/header/header.php" );?>
	<?php 
	 include ("Awskomfunction/edit-pro.php"); }?>
