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

//transforma array em json
echo json_encode($pessoas);

?>
