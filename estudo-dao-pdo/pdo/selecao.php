<?php

// no SQLServer
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

//retorna todos pro results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//exibe na forma de um json
echo json_encode($results);
?>
