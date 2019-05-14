<?php

require_once("config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
json_encode($usuarios);

$root = new Usuario();
//está sendo chamado somente o usuário c ID = 3
$root->loadById(3);
echo $root; 

//carrega uma lista de usuários
$lista = Usuario::getList(); //está sendo chamado dessa forma por ser estático
echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);

//chama um usuário usando login e senha
$usuario = new Usuario();
$usuario->login("root","!@#$");
echo $usuario;

//inserindo
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert()
echo $aluno;

//atualizando
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "senha");
echo $usuario;

//excluindo
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();
echo $usuario;

?>
