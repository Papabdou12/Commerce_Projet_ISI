<?php
		require_once '../Model/db_connect.php';
	$connect=getConnection();
   closeConnection($connect);
   header('location:../index1.php');
?>