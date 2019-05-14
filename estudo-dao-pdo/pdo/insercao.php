<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");
//:LOGIN e :PASSWORD é pra tornar genérico os valores enviados, não setar direto
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "13409840198";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "inserido";
?>