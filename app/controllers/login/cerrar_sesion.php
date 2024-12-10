<?php
include('../../config.php');
session_start();

// Verificar si la sesión está activa
if (isset($_SESSION['sesion_email'])) {
    // Vaciar todas las variables de sesión
    //$_SESSION = [];

    

    // Destruir la sesión
    session_destroy();

    // Redirigir a la página de inicio de sesión
    header('Location: ' . $URL . '/login');
   // exit(); // Evitar que el script continúe ejecutándose
} 
