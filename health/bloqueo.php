<?require 'database.php'?>
<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Si no ha iniciado sesión, redirige al index o muestra un mensaje
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/game5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header1">
        <a href="Principal.phpl" class="logo">HB</a>
        <nav class="navbar">
            <a href="Principal.php" class="active">Casa</a>
            <a href="Nosotros.php">Nosotros</a>
            <a href="index.php">Eventos </a>
            <a href="register.php">Unete</a>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="info">
        <p>
            El <span class="bloqueo">bloqueo emocional</span> es un estado emocional en el cual  una persona es o se siente  incapaz de identificar o expresar sus emociones de manera efectiva y acertada. Esto puede manifestarse de diferentes maneras, como una sensación de insensibilidad,confusión, o dificultad para conectar con los sentimientos personales o con los sentimientos de los demás. Estos bloqueos emocionales pueden tener varias causas, como: Traumas, malas experiencias, o pensamientos repetitivos los cuales pueden dificultar la expresión emocional y sentimental.
        </p>
        <div class="señales">
            <h3>Señales del bloqueo emocional </h3>
            <ul><span class="arrow">➜</span> Dificultad para identificar o nombrar emociones.</ul>
            <ul><span class="arrow">➜</span> No estar conectado con los sentimientos</ul>
            <ul><span class="arrow">➜</span> Problemas en cuanto a las relaciones interpersonales</ul>
            <ul><span class="arrow">➜</span> Usuales comportamientos de evasión</ul>
            <ul><span class="arrow">➜</span> Episodios de estrés o ansiedad</ul>
        </div>

    </div>