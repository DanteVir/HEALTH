
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
    <link rel="stylesheet" href="css/game6.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <header class="header1">
        <a href="Principal.php" class="logo">HB</a>
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
            La <span class="depre">Depresión</span> es un trastorno del estado de ánimo que afecta negativamente cómo una persona se siente, piensa y maneja las actividades diarias. No es simplemente un sentimiento de tristeza ocasional; es una condición clínica que puede tener un impacto significativo en la vida de una persona.
        </p>
        <div class="sintomas">
            <h3>Sintomas</h3>
            <ul><span class="arrow">➜</span> Sentimientos persistentes de tristeza, vacío o desesperanza.</ul>
            <ul><span class="arrow">➜</span> Pérdida de interés o placer en actividades que antes se disfrutaban.</ul>
            <ul><span class="arrow">➜</span> Cambios en el apetito o peso (aumento o disminución).</ul>
            <ul><span class="arrow">➜</span> Alteraciones en el sueño (insomnio o hipersomnia)</ul>
            <ul><span class="arrow">➜</span> Dificultad para concentrarse o tomar decisiones.</ul>
            <ul><span class="arrow">➜</span> Pensamientos recurrentes de muerte o suicidio.</ul>
            <ul><span class="arrow">➜</span> Fatiga o falta de energía.</ul>
        </div>

        <div class="musica">
            <p>¡Canciones que alegrarán tu día!</p>
            <audio controls>
                <source src="audio/bluesky.mp3" type="audio/mpeg">
                Tu navegador no soporta la etiqueta de audio.
            </audio>
            <br>
            <audio controls>
                <source src="bluesky.mp3" type="audio/mpeg">
                Tu navegador no soporta la etiqueta de audio.
            </audio>
            <br>
            <audio controls>
                <source src="bluesky.mp3" type="audio/mpeg">
                Tu navegador no soporta la etiqueta de audio.
            </audio>
            <br>
            <audio controls>
                <source src="bluesky.mp3" type="audio/mpeg">
                Tu navegador no soporta la etiqueta de audio.
            </audio>
        </div>
  
