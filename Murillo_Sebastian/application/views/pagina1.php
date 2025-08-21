<style>
    .cuerpo{
        background-color: #458328ff;
    }
    </style>


<?php

$variable = 0;
echo "<h1 class= 'cuerpo'>hola mundo \n" .$variable. "<h1>";
echo "<hr>";

while($variable<=6){
    echo "<h".$variable.">hola world \n".$variable."</h>";
    $variable++;
}

for ($i=0; $i < 6; $i++) { 
    echo "<h".$variable.">hola world \n".$variable."</h>";
    $variable++;
}
?>