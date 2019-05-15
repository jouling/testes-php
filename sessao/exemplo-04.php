<?php

require_once("config.php");

//vai gerando IDs diferentes
//previne ataques vindos pelo ID
session_regenerate_id();

echo session_id(); //também posso passar como argumento um id

var_dump($_SESSION);
?>