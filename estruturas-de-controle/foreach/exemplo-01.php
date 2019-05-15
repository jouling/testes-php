<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes) {
    echo "O mês é: " . $mes . "<br>";
}

foreach ($meses as $index => $mes) {
    echo "O mês " . $index+1 . " é: " . $mes . "<br>"; 
}

?>