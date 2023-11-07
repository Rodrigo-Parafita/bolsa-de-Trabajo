<?php
// Verifica si se proporciona un ID válido a través de la URL
if (isset($_GET['id'])) {
    // Conecta a la base de datos (ajusta la configuración de la conexión según tus datos)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pagcv";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Obtiene el ID del archivo a descargar
    $id = $_GET['id'];

    // Consulta la base de datos para obtener los datos del archivo
    $sql = "SELECT CV, CVNombre FROM formcv WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $cvData = $row['CV'];
        $cvName = $row['CVNombre'];

        // Configura las cabeceras para la descarga del archivo
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"" . $cvName . "\"");

        // Imprime el contenido del archivo CV
        echo $cvData;
    } else {
        echo "Archivo no encontrado.";
    }

    // Cierra la conexión a la base de datos
    $conn->close();
} else {
    echo "ID no válido.";
}
?>
