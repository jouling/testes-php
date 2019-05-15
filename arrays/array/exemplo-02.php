<?php

//montadora
$carros[0][0] = "GM";
//modelos abaixo
$carros[0][1] = "Cobalt";
$carros[0][2] = "Ônix";
$carros[0][3] = "Camaro";

//montadora
$carros[1][0] = "Ford";
//modelos abaixo
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

//para exibir Camaro:
echo $carros[0][3];

//para ver o último carro que tenho na Ford
echo end($carros[1]);

?>