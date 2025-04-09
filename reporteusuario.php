<?php
include_once "conexion.php";
$sql="SELECT *FROM USUARIO";
$result=mysqli_query($conn,$sql)
//var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REPORTE DE USUARIO</h1>
    <table border="2">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>correo electronico</th>
                <th>telefono</th>
            </tr>
        </thead>
        <tbody>
          <?php
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td><?=$row['id'];?></td>
                <td><?=$row['nombre'];?></td>
                <td><?=$row['email'];?></td>
                <td><?=$row['telefono'];?></td>
                <td><?=$row['idpermiso'];?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>