<?php
// Inicia la sesión (debe hacerse en todas las páginas donde se usen sesiones)
session_start();

// Arreglo asociativo con los datos de los usuarios
$usuarios = array(
    "tecnica1lanus@abc.gob.ar" => "Tec1Lanus_Administrador2023",
    "tecnica2lanus@abc.gob.ar" => "Tec2Lanus_Administrador2023",
    "tecnica3lanus@abc.gob.ar" => "Tec3Lanus_Administrador2023",
    "tecnica4lanus@abc.gob.ar" => "Tec4Lanus_Administrador2023",
    "tecnica5lanus@abc.gob.ar" => "Tec5Lanus_Administrador2023",
    "tecnica6lanus@abc.gob.ar" => "Tec6Lanus_Administrador2023",
    "tecnica7lanus@abc.gob.ar" => "Tec7Lanus_Administrador2023",
    "tecnica8lanus@abc.gob.ar" => "Tec8Lanus_Administrador2023",
    "tecnica9lanus@abc.gob.ar" => "Tec9Lanus_Administrador2023",
);

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el correo y la contraseña del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Verifica si el correo existe en el arreglo de usuarios y si la contraseña es correcta
    if (array_key_exists($correo, $usuarios) && $usuarios[$correo] === $contrasena) {
        // Usuario autenticado correctamente, configura la variable de sesión "correo"
        $_SESSION["correo"] = $correo;

        // Redirige a la página que se mostrará después del inicio de sesión exitoso
        header("Location: cv.php");
        exit;
    } else {
        // Si el correo o la contraseña son incorrectos, muestra un mensaje de error
        echo "Correo o contraseña incorrectos. Inténtalo de nuevo.";
    }
}
?>

