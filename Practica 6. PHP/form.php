<?php
if ($_POST) {
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cursosqlsamsung";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO USUARIO (NOMBRE, APELLIDO, EMAIL) VALUES ('$nombre', '$apellido', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>