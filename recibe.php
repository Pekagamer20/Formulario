<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas</title>
</head>
<body>
    <?php 
        require('conexion.php');


    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        $nombre = $_POST["nombre"];
        $correo = $_POST["email"];
        
        //limpieza de datos 

        // crea registro en DB

        $sql = "INSERT INTO personas (nombre,correo) 
                VALUES ('$nombre' , '$correo')" ;
            $conn->exec($sql);

        echo "<h2> Datos recibidos: </h2>";
        echo "<p> Nombre: " . $nombre . "</p>";
        echo "<p> Correo: " . $correo . "</p>";
    }else {
        echo "<p> no es una peticion tipo POST. </p>";
    }
    ?> 
</body>
</html>