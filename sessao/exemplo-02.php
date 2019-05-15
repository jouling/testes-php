<?php

require_once("config.php");

//limpa a variável
session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];

//limpa a variável e remove o usuário
session_destroy();

?>