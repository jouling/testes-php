<?php

require_once("config.php");

echo session_save_path(); //exibe onde está sendo armazenada a sessão atualmente

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "sessões desabilitadas.";
    break;

    case PHP_SESSION_NONE:
        echo "sessões habilitadas, mas nenhuma existe.";
    break;

    case PHP_SESSION_ACTIVE: 
        echo "sessões habilitadas, e uma existe.";
    break;
}

?>