<?php 
	//estamos en fw/fw.php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	require '../fw/Database.php';
	require '../fw/Model.php';
	require '../fw/View.php';

?>