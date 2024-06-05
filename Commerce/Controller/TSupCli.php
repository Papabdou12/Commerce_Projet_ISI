<?php
	require_once '../Model/Clientdao.php';
	if (isset($_GET['idPart'])) 
	{
		$idPart = $_GET['idPart'];
		$result = deleteclient($idPart);
		if ($result) 
		{
			header("location:../Views/Lclient.php");
		}
	}
?>