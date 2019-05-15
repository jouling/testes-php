<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'João';
    'idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Juliana';
    'idade'=>17
));

print_r($pessoas[0]); //vai printar o joão
echo "<br>";
print_r($pessoas[0]['nome']); //vai printar somente "João"
?>