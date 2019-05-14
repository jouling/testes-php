<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");
//:LOGIN e :PASSWORD é pra tornar genérico os valores enviados, não setar direto
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "deletado";

?>
