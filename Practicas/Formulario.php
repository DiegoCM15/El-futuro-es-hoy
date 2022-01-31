<!DOCTYPE html>
<title>Agenda de citas</title>

<body>
<link href="style1.css" rel="stylesheet" type="text/css" />

    <h2 id="h2Form">Formulario</h2>

    <form action="Conexion.php" method="POST">

        <div id="Form">
            Ingrese un ID: <br>
            <input type=int name="ID" required><br><br>

            Ingrese nombre:<br>
            <input type="text" name="nombre" required><br><br>


            Ingrese e-mail:<br>
            <input type="text" name="e-mail" required><br><br>

            Ingrese su numero telefonico:<br>
            <input type="text" name="telefono" required><br><br>

            Escoja un paquete de fotografias:<br>
            <select name="paquetefoto">

                <option value="1">Opciones</option>
                <option value="2">5 fotos</option>
                <option value="3">9 fotos</option>
                <option value="4">12 fotos</option>
                <option value="5">6 fotos</option>
                <option value="6">4 fotos</option>
            </select>
            <br>
            <br>
            Inserte la fecha de su cita:<br>
            <input type="date" name="fecha" required> <br><br>

            Inserte la hora de su cita: <br>
            <input type="time" name="hora" required><br><br>

            <br>
            <input type="submit" value="Registrar">
            <a href="Consultar.php">Consultar citas</a>
            </form>
        </div>

    </form>
    
    

</body>

</html>