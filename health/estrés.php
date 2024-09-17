<?require 'database.php'?>
<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
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
    <link rel="stylesheet" href="css/game7.css">
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
            <a href="index.php">Eventos</a>
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
            El <span class="estrés">estrés</span> es la respuesta del cuerpo y la mente ante demandas o presiones externas. Si bien puede ser una reacción normal que nos ayuda a enfrentar situaciones difíciles, cuando el estrés se vuelve crónico o persistente, puede afectar seriamente nuestra salud.
        </p>
        <div class="sintomas">
            <h3>Sintomas</h3>
            <ul><span class="arrow">➜</span> Dolor de cabeza.</ul>
            <ul><span class="arrow">➜</span> Tensión muscular.</ul>
            <ul><span class="arrow">➜</span> Fatiga.</ul>
            <ul><span class="arrow">➜</span> irritabilidad, frustración, tristeza, o sensación de estar abrumado.</ul>
            <ul><span class="arrow">➜</span> Insomnio</ul>
        </div>

    </div>

</div>

<div class="juego">
    <h3>Mini Game🦢✨</h3>
    <br>
    <div id="puzzle" class="puzzle-container"></div>
    <button id="restartButton">Restart</button>
    <script src="java-script/game7.js"></script>
</div>
<br>
<br>


</body>
</html>
