<?php
	
	require_once("config.php");
	
	$root = new Usuario();
	$root->loadbyId(15);
	
	echo $root;
	/*
	$sql = new Sql();
	
	$usuarios = $sql->select("select * from tb_usuarios");
		
	echo json_encode($usuarios);
	*/
?>