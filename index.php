<?php
	
	require_once("config.php");
	//carrega um usuario
	//$root = new Usuario();
	//$root->loadbyId(15);
	
	//echo $root;
	
	//carrega uma lista de usuarios
		
		//$lista = Usuario::getList();
		//echo json_encode($lista);
	
	//Carrega uma lista de usuarios buscando pelo login
	
	//$search = Usuario::search("jo");
	//echo json_encode($search);
	
	//Carrega um usuário usando o login e a senha
	
	$usuario = new Usuario();
	$usuario->login("root","!@#$%");
	echo $usuario;
	/*
	$sql = new Sql();
	
	$usuarios = $sql->select("select * from tb_usuarios");
		
	echo json_encode($usuarios);
	*/
?>