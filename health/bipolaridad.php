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
    <link rel="stylesheet" href="css/game3.css">
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
            La <span class="bipo">bipolaridad</span> es una condición de salud mental caracterizada por cambios extremos en el estado de ánimo, que van desde episodios de manía o hipomanía hasta episodios de depresión.
        </p>
        <div class="fases">
            <h3>Fases de la Bipolaridad</h3>
            <ul><span class="arrow"><b>⤷ Manía:</b></span> Estado de ánimo anormalmente elevado, eufórico o irritable, acompañado de aumento de energía y actividad.</ul>
            <ul><span class="arrow"><b>⤷ Hipomanía:</b></span> Similar a la manía pero menos severa, no causa un deterioro marcado en el funcionamiento social o laboral.</ul>
            <ul><span class="arrow"><b>⤷ Depresión:</b></span> Estado de ánimo bajo, pérdida de interés en actividades, cambios en el apetito y el sueño, y pensamientos negativos</ul>
        </div>
    </div>
    <div class="video1">
        <video  controls src="css/Bipolar.mp4" type="bipolar/mp4" height="500px" width="500px"></video>
    </div>

    
</div>