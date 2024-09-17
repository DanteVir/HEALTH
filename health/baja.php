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
    <link rel="stylesheet" href="css/game4.css">
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
            La <span class="auto">autoestima</span> es un factor clave en la salud mental y el bienestar general. Se refiere a la percepción y valoración personal que tenemos sobre nosotros mismos. La baja autoestima puede llevar a un ciclo negativo en el que las creencias autolimitantes influyen en nuestras acciones y decisiones.

        </p>
        <div class="sintomas">
            <h3>Sintomas</h3>
            <ul><span class="arrow">➜</span> Inseguridad constante</ul>
            <ul><span class="arrow">➜</span> Miedo al fracaso o al rechazo</ul>
            <ul><span class="arrow">➜</span> Dificultad para aceptar cumplidos</ul>
            <ul><span class="arrow">➜</span> Auto-crítica excesiva</ul>
            <ul><span class="arrow">➜</span> Se evita tomar riesgos</ul>
            <ul><span class="arrow">➜</span> Pensamientos de insuficiencia</ul>
        </div>
    </div>
</div>

<div class="tips">
    <h3>Tips para un buen autoestima:</h3>
    <ul><span class="arrow">🧘🏻‍♀️</span> Trátate con la misma amabilidad que ofrecerías a un amigo en una situación similar. Reconoce tus logros y esfuerzos.
    </ul>
    <ul><span class="arrow">🥊</span> Identifica y cuestiona las creencias limitantes que tienes sobre ti mismo. Reemplázalas con afirmaciones positivas.
    </ul>
    <ul><span class="arrow">🫂</span> Mantén relaciones con personas que te apoyen, valoren y respeten. Aléjate de aquellos que te hagan sentir menos.
    </ul>
    <ul><span class="arrow">📜</span> Divide los grandes objetivos en pasos más pequeños y alcanzables. Celebra cada logro, sin importar lo pequeño que sea.
    </ul>
    <ul><span class="arrow">🤸🏼</span> Participa en actividades que te hagan sentir bien: Encuentra actividades o pasatiempos que disfrutes y que refuercen tu sentido de valor personal.
    </ul>
</div>
<br>
<div class="good">
    <a href="https://cnnmon.itch.io/goodmorning">🎮Game🕹️</a>
</div>


</html>
</body>
