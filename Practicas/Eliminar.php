<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "citasfotografía";

$id=$_GET['ID'];
$con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");

    $sql="DELETE FROM datoscita where ID like $id";


    $ejecutar=mysqli_query($con, $sql);

    if (!$ejecutar) {
        echo "Hubo Algun Error";
    } else {
        echo "Datos Eliminados Correctamente<br><a href='Formulario.php'>Volver</a>";
        echo "<br><a href='Consultar.php'>Mostrar citas</a>";
}

?>