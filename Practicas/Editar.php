<!DOCTYPE html>
<html>

<head>
    <title>Editar registros</title>
    <link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$id=$_GET['ID'];
$nombre=$_GET['Nombre_Completo'];
$email = $_GET['E-mail'];
$telefono = $_GET['Num_Tel'];
$paquete = $_GET['Paquete'];
$fecha = $_GET['Fecha'];
$hora = $_GET['Hora'];
?>


    <div>
        <form action="Update.php" method="post">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="ID" value="<?php echo $id ?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" value="<?php echo $nombre ?>"></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="text" name="e-mail" value="<?= $email ?>"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name="telefono" value="<?= $telefono ?>"></td>
                </tr>
                <tr>
                    <td>Paquete</td>
                    <td><input type="text" name="paquetefoto" value="<?= $paquete ?>"></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <input type="date" name="fecha" value="<?= $fecha ?>">
                </tr>
                <tr>
                    <td>Hora</td>
                    <td><input type="time" name="hora" value="<?= $hora ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <a href="Consultar.php">Cancelar</a>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>