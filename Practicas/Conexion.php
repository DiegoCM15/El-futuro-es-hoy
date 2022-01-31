    <?php
    //conectamos Con el servidor
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "citasfotografía";

    //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
    $con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");
    mysqli_select_db($con,$db)or die("problemas al conectar");

    //recuperar las variables
    $id=$_POST['ID'];
    $nombre = $_POST['nombre'];
    $email = $_POST['e-mail'];
    $telefono = $_POST['telefono'];
    $paquete = $_POST['paquetefoto'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    //hacemos la sentencia de sql
    $sql = "INSERT INTO datoscita VALUES
            ('$id',
            '$nombre',
           '$email',
           '$telefono',
           '$paquete',
           '$fecha',
           '$hora')";
    //ejecutamos la sentencia de sql
    $ejecutar = mysqli_query($con, $sql);
    //verificamos la ejecucion
    if (!$ejecutar) {
        echo "Hubo Algun Error";
    } else {
        echo "Datos Guardados Correctamente<br><a href='Formulario.php'>Volver</a>";
        echo "<br><a href='Consultar.php'>Mostrar citas</a>";
    }
    ?>