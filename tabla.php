<?php
    include("datos.php");
    if (
        isset($_POST["nombre"]) &&
        isset($_POST["calificacion"]) &&
        isset($_POST["sabor"])
        )
      {
        $platillo_nuevo["nombre"]=$_POST["nombre"];
        $platillo_nuevo["calificacion"]=$_POST["calificacion"];
        $platillo_nuevo["sabor"]=$_POST["sabor"];
        
        array_push($platillos,$platillo_nuevo);
    }

   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datost</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="formulario">
    <form method="POST" action="tabla.php">
        <input type="text" name="nombre" placeholder="nombre de platillo">
        <input type="text" name="calificacion"placeholder="calificacion">
        <input type="text" name="sabor"placeholder="sabor">
        <input class="btn_enviar" type="submit" value="Enviar">
    </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre de platillo</th>
                <th>Calificación</th>
                <th>Sabor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($platillos as $key => $platillo):?> 
                <tr>
                <td><?=$platillo["nombre"]?></td>
                <td><?=$platillo["calificacion"]?></td>
                <td><?=$platillo["sabor"]?></td>
                </tr>
            <?php endforeach; ?>
    
           
            <!-- <tr>
                <td>Paella</td>
                <td>Excelente</td>
                <td>Cremoso</td>
            </tr>
            <tr>
                <td>Lentejas</td>
                <td>Buena</td>
                <td>Picante</td>
            </tr>
            <tr>
                <td>Natillas</td>
                <td>Buena</td>
                <td>Dulce</td>
            </tr> -->

        </tbody>




    </table>
    
</body>
</html>