<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");


echo json_encode($usuarios);
*/

/*
	Carrega um usuario >______<
$root = new Usuario();
$root->loadById(4);
echo $root;
*/

/*
CARREGA uma lista de usuarios
$lista = usuario::getList();
echo json_encode($lista);
*/

/*
Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jos");

echo json_encode($search);
*/

/* 
//Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");
echo $usuario;
*/

/*
Criando novo usuario
$aluno = new Usuario("andred", "12434" );
$aluno->insert();

echo $aluno;
*/

/*
Alerar um usuario
$usuario = new Usuario();

$usuario->loadById(8);
echo $usuario;

$usuario->update("professor", "!#@$!$#%");
 
*/

/**/
//Deletetar usuario

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;







 ?>

