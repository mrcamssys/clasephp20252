<style>
    .cuerpo{
        background-color: #3cd649;
    }
</style>
<?php
    $variable = 0;
    echo "<h1 class='cuerpo'>HELLO WORLD \n".$variable."</h1>";
    echo "<hr>";
    while ($variable <= 6) {
        echo "<h".$variable."> Hola Mundo \n".$variable."</h".$variable.">";
        $variable += 1;
    }
    for ($variable=0; $variable < 6; $variable++) { 
        echo "<h".$variable."> Hola Mundo \n".$variable."</h".$variable.">";
    }
?>


