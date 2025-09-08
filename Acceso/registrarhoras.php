<?php
session_start();
include_once 'bd.php';
    
    $entrada = $_POST['entrada'];
    $salida = $_POST['salida'];
    
    
    $sentencia = $conexion->prepare("INSERT INTO horarios(entrada,salida) VALUES (?,?)");
    $resultado = $sentencia->execute([$entrada,$salida]);

    if ($resultado === TRUE) {
        echo('Location: ingresarsistemas.php?mensaje=registrado');
    } else {
        header('Location: administrador.php?mensaje=error');
        exit();
    }
    
?>