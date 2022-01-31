<!DOCTYPE html>
<html>
    <head>
        <title>Citas agendadas</title>
    </head>

    <body>

        <link rel="stylesheet" href="../css/style1.css" />

        <table id="mostCitas">
            <tr>
                <td>Nombre completo</td>
                <td>E-mail</td>
                <td>Telefono</td>
                <td>Paquete</td>
                <td>Fecha</td>
                <td>Hora</td>
            </tr>

            <?php
                $host ="localhost";
                $user ="root";
                $pass ="";
                $db="citasfotografía";
                
                //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
                $con = mysqli_connect($host, $user, $pass, $db);
                mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
                
            ?>

            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>



        </table>

    </body>


</html>