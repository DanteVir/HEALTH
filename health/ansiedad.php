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
    <link rel="stylesheet" href="css/game.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
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
            La <span class="ansiedad">ansiedad</span> es una respuesta natural del cuerpo ante situaciones de estrés o peligro. Sin embargo, cuando se vuelve excesiva o persistente, puede interferir con la vida diaria.
        </p>
        <div class="sintomas">
            <h3>Sintomas</h3>
            <ul><span class="arrow">➜</span> Preocupación excesiva.</ul>
            <ul><span class="arrow">➜</span> Inquietud o sensación de agitación.</ul>
            <ul><span class="arrow">➜</span> Dificultad para concentrarse.</ul>
            <ul><span class="arrow">➜</span> Problemas para dormir.</ul>
            <ul><span class="arrow">➜</span> Síntomas físicos como palpitaciones o sudoración.</ul>
        </div>

    </div>

        <div class="juego">
            <center><h3>🫧¡Play a Game!🐋</h3></center>
            <br>
            <div class="game-board" id="game-board"></div>
            <script src="java-script/game.js"></script></div>
<br>
<br>


</body>
</html>
