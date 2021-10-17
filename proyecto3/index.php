<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Home </title>
</head>

<body>
    <h1>Bienvenidos</h1>
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
</body>

</html>