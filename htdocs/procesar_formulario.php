<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pagcv";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$DNI = $_POST["DNI"];
$fechahora = $_POST["fechahora"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$domicilio = $_POST["domicilio"];
$localidad = $_POST["localidad"];
$egresado_de = $_POST["egresado_de"];
$promedio = $_POST["promedio"];
$profesiones = $_POST["profesiones"];
$descripcion = $_POST["descripcion"];

// Guarda la imagen en la base de datos
$imagen_alumno = $_FILES["imagen_alumno"];

if ($imagen_alumno["error"] === UPLOAD_ERR_OK && strpos($imagen_alumno["type"], "image/") === 0) {
    $nombre_archivo_imagen = $imagen_alumno["name"];
    $tipo_mime_imagen = $imagen_alumno["type"];
    $contenido_imagen = file_get_contents($imagen_alumno["tmp_name"]);

    // Guarda el PDF en la base de datos
    $archivo_pdf = $_FILES["cv_alumno"];

    if ($archivo_pdf["error"] === UPLOAD_ERR_OK && $archivo_pdf["type"] === "application/pdf") {
        $nombre_archivo_pdf = $archivo_pdf["name"];
        $tipo_mime_pdf = $archivo_pdf["type"];
        $contenido_pdf = file_get_contents($archivo_pdf["tmp_name"]);

        // Utiliza una sentencia preparada para insertar los datos
        $sql = "INSERT INTO formcv (NOM, APL, DNI, FDN, TEL, EML, DOM, LOC, ESC, PRM, PRO, DES, IMG, NOMIMG, MIMEIMG, CV, NOMCV, MIMECV) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssssssssss", $nombre, $apellido, $DNI, $fechahora, $telefono, $email, $domicilio, $localidad, $egresado_de, $promedio, $profesiones, $descripcion, $contenido_imagen, $nombre_archivo_imagen, $tipo_mime_imagen, $contenido_pdf, $nombre_archivo_pdf, $tipo_mime_pdf);

        if ($stmt->execute()) {
            echo "Los datos, la imagen y el PDF se guardaron correctamente en la base de datos.";
        } else {
            echo "Error al guardar los datos, la imagen y el PDF: " . $stmt->error;
        }
    } else {
        echo "Por favor, seleccione un archivo PDF válido.";
    }
} else {
    echo "Por favor, seleccione una imagen válida.";
}

// Cierra la conexión
$conn->close();
?>

