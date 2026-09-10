<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas</title>
</head>
<body>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        $nombre = $_POST["nombre"];
        $correo = $_POST["email"];
        
        //limpieza 
        // DB

        echo "<h2> Datos recibidos: </h2>";
        echo "<p> Nombre: " . $nombre . "</p>";
        echo "<p> Correo: " . $correo . "</p>";
    }else {
        echo "<p> no es una peticion tipo POST. </p>";
    }
    ?> 
</body>
</html>