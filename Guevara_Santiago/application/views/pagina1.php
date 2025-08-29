<style>
  .cuerpo {
    background-color: #3498db;
    color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
  }
</style>

<div class="cuerpo">
  <?php
  $variable = 0;
  echo "<h1> Hola mundo 😃 — Variable: ".$variable."</h1>";
  echo "<hr>";

  while ($variable < 6) {
      echo "<h".$variable."> este texto es cambiable → Valor: ". $variable. "</h".$variable.">";
      $variable++;
  }
  ?>
  <h2>Esta es una actualización de mi pagina ✔️</h2>
</div>
