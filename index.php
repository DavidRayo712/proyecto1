<?php
    $nombre = "david";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h1>Es la página principal.</h1>
    <h2>Hola mi nombre es:<?=$nombre;?></h2>
    <?php
    //forma 1, de php
    for($i=0;$i<=10;$i++){
        echo "<p>$i</p>";
    }
    ?>
    <!-- forma 2 inclusiva de HTML-->
    <?php for($i=0;$i<=10;$i++):?>
        <p>Hola mi indice es:<?=$i?></p>
    <?php endfor;?>

</body>
</html>

