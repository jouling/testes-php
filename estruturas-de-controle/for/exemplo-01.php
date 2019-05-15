<?php

for($i = 0; $i < 10; $i++){
    echo $i . "<br>"; //imprime de 0 a 9
}

for($i = 0; $i < 1000; $i+=5){ //imprime 0, 5, 10, 15, 20...
    if($i > 200 && $i < 800) continue; //ele vai 'ignorar' dos 200 aos 800
    if($i === 900) break; //for para no 900
    echo $i . "<br>";
}

?>