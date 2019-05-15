<?php

echo "<select>";

//date("Y") retorna o ano atual
//enquanto o ano a partir de 2019 for maior que 1919
for($i = date("Y"); $i > date("Y")-100; $i--){
    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

?>