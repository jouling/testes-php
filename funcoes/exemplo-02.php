<?php

function ola($nome = "mundo", $periodo = "Bom dia"){ //não é mais obrigatório passar parâmetro; por padrão vai o mundo
    return "Olá $nome! $periodo<br>"; //com aspas simples imprimiria "Olá $nome!" 
}

echo ola("Juliana", "Boa tarde"); //Olá Juliana! Boa tarde
echo ola("", "Boa noite"); //imprime "Olá ! Boa noite"
echo ola(); //imprime "Olá mundo! Bom dia"
echo ola("", "") //Olá !

?>