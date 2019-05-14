<?php
//transações são processos onde é possível confirmar as alterações ou voltar atrás, como um ctrl + z

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn->beginTransaction();

//:LOGIN e :PASSWORD é pra tornar genérico os valores enviados, não setar direto
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt->execute(array($id));

//ele volta atrás, cancela a exclusão
$conn->rollback();

//esse confirma a exclusão
$conn->commit();

echo "deletado";


?>