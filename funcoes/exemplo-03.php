<?php

function ola(){
    $argumentos = func_get_args(); //função recupera os argumentos e passa num array 
    return $argumentos;

}

var_dump(ola("Bom dia"));
//array(1) {[0]=>string(7) "Bom dia"}

echo "<br>"

var_dump(ola("Bom dia", 10));
//array(2) {[0]=>string(7) "Bom dia" [1]=>int(10)}

?>