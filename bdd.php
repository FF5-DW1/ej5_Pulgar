<?php
$servidor = "mysql";  // Cambia esto si tu base de datos se encuentra en un servidor diferente
$usuario = "pulgar";  // Nombre de usuario de la base de datos
$contrasena = "pulgarsin";  // Contraseña de la base de datos
$base_datos = "calendar";  // Nombre de la base de datos

// Establecer la conexión
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contrasena);
    // Configurar el manejo de errores para que lance excepciones en caso de fallos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}

