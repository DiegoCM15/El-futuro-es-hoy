<!DOCTYPE html>
<html>

<head>
    <title>Consulta de agendas</title>
    <link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div>
        <table id="tablaMostrar">
            <tr>
                <td>ID </td>
                <td>Nombre </td>
                <td>Correo </td>
                <td>Telefono </td>
                <td>Paquete </td>
                <td>Fecha </td>
                <td>Hora </td>
            </tr>
            <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "citasfotografía";
        
            $con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");
            mysqli_select_db($con,$db)or die("problemas al conectar");
            $sql="SELECT * FROM datoscita order by ID asc";
            $result=mysqli_query($con,$sql);
            while($mostrar=mysqli_fetch_row($result)){
            ?>
            
            <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td><?php echo $mostrar['3'] ?></td>
                <td><?php echo $mostrar['4'] ?></td>
                <td><?php echo $mostrar['5'] ?></td>
                <td><?php echo $mostrar['6'] ?></td>
                <td>
                    <a href="Editar.php? 
                    ID=<?php echo $mostrar['0']?> &
                    Nombre_Completo= <?php echo $mostrar['1'] ?> &
                    E-mail= <?php echo $mostrar['2'] ?> &
                    Num_Tel=<?php echo $mostrar['3'] ?> &
                    Paquete=<?php echo $mostrar['4'] ?> &
                    Fecha=<?php echo $mostrar['5'] ?> &
                    Hora=<?php echo $mostrar['6'] ?>">Editar</a>
                    <a href="Eliminar.php? ID=<?php echo $mostrar['0']?> ">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <a href="Formulario.php">Agendar nueva cita</a>
    </div>
</body>

</html>