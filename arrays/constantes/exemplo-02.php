<?php
//array numa constante
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
], true); //esse true torna a constante case insensitive, ou seja, posso chamá-la em maiúsculo ou minúsculo

print_r(BANCO_DE_DADOS);

?>