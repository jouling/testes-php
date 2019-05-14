<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");
//:LOGIN e :PASSWORD é pra tornar genérico os valores enviados, não setar direto
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin :LOGIN, dessenha :PASSWORD WHERE idusuario = :ID");

$login = "jose";
$password = "13409840198";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "alterado";
?>
