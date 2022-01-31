<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "citasfotografía";

    $id=$_POST['ID'];
    $nombre = $_POST['nombre'];
    $email = $_POST['e-mail'];
    $telefono = $_POST['telefono'];
    $paquete = $_POST['paquetefoto'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
    $con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");

    $sql="UPDATE datoscita set Nombre='$nombre', Correo='$email', Telefono='$telefono', 
    Paquete='$paquete', Fecha='$fecha', Hora='$hora' where ID like $id";


    $ejecutar=mysqli_query($con, $sql);

    if (!$ejecutar) {
        echo "Hubo Algun Error";
    } else {
        echo "Datos Guardados Correctamente<br><a href='Formulario.php'>Volver</a>";
        echo "<br><a href='Consultar.php'>Mostrar citas</a>";
}
?>