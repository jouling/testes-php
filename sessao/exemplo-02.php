<?php

require_once("config.php");

//limpa a variável
session_unset($_SESSION["nome"]); //se não passar nenhum parâmetro no session, ele limpa todas as variáveis

echo $_SESSION["nome"];
//ao executar, ele diz que não há tal index 

//ainda posso fazer $_SESSION["nome"] = "blabla"

//limpa a variável e remove o usuário
session_destroy();

//tenho que criar $_SESSION["nome"] = "criei-dnv"
?>