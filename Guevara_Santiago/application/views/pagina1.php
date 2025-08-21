<style>
    .cuerpo{
     background-color:blue ;

    }



</style>
<?php

    $variable = 0;
    echo "<h1 class= 'cuerpo'>hola mundo \n".$variable; "</h1>";
    echo "<hr>";
    

    while($variable<=6){
        echo "<h".$variable."hola mundo \n".$variable. "</h".$variable.">";
        $variable++;
    }
?>