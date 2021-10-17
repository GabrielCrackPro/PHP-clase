  <?php
  $fecha = date("d/m/Y");
  $dia = date("d", strtotime($fecha));
  if ($dia == "15" || $dia == "20") {
    echo "<h1Sitio en mantenimiento</h1>";
  } else {
    $fecha = date("d/m/Y H:m:s");
    echo "<h1>Hoy es: $fecha</h1>";
  }
  ?>