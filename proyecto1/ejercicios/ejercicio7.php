<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calcularIva($precio, $iva)
    {
        $iva = $precio * $iva;
        return $iva;
    }
    echo "<div style='text-align:center';>";
    echo "---------------------";
    echo "<br>";
    echo calcularIva(12, 1.21);
    echo "______________________";
    echo "<br>";
    echo "</div>";
    ?>

</body>

</html>