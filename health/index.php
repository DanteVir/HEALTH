<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Brain</title>
    <link rel="stylesheet" href="css/style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">


</head>

<body>
    <header class="header1">
        <a href="principal.php" class="logo">HB</a>
        <nav class="navbar">
            <a href="principal.php" class="active">Casa</a>
            <a href="Nosotros.php">Nosotros</a>
            <a href="index.php">Eventos </a>
            <a href="register.php">Unete</a>
        </nav>
    </header>
    <?php if(!empty($user)): ?>
    </nav>
  
        <nav class="sidebar">
            <div class="logo-menu">
                <h2 class="logo">Menu</h2>
                <i class='bx bx-menu toggle-btn'></i>
            </div>
            <ul class="list">
                <li class="list-item">
                    <a href="ansiedad.php">
                        <i class='bx bx-shocked' ></i>
                        <span class="link-name">Ansiedad</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="ataque.php">
                        <i class='bx bx-tired' ></i>
                        <span class="link-name">Ataque de pánico</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="bipolaridad.php">
                        <i class='bx bx-meh-blank' ></i>
                        <span class="link-name">Bipolaridad</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="baja.php">
                        <i class='bx bxs-face' ></i>
                        <span class="link-name">Baja autoestima</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="bloqueo.php">
                        <i class='bx bxs-confused' ></i>
                        <span class="link-name">Bloqueo emocional</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="depresión.php">
                        <i class='bx bx-ghost' ></i>
                        <span class="link-name">Depresión</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="estrés.php">
                        <i class='bx bx-angry' ></i>
                        <span class="link-name">Estrés</span>
                    </a>
                </li>
                <li class="list-item">
                    <a href="logout.php">
                        <i class='bx bx-x' style="background-color: #FA45A5FF; border-radius:25px;" ></i>
                        <span class="link-name" >Logout</span>
                    </a>
                </li>
    
            </ul>
        </nav>
        <script src="java-script/script.js"></script>

<div class="important">
    <p>
      <span class="text">¡Bienvenido <?= $user['email']; ?>!</span><br>
      Esta es la sección más importante de nuestra página, en ella encontrarás diferentes recursos educativos, dinamicos e informativos que te servirán para obtener una mayor comprensión sobre la salud mental, sus bases, las enfermedades más comunes que la afectan entre muchas cosas más!<span class="text"><b>ADVERTENCIA</b></span> esta página es unicamente informativa en ningún momento se esta dando un diágnostico médico,si crees presentar sintomas relacionados con la información presentada por favor consulta con un profesional. 
    </p>
</div>
<?php else: ?>
    <div style="position:absolute; margin-left:500px; margin-top:300px; text-align:center; color:white; text-decoration:none;">
        <h1 >¿Quieres conocer nuestro contenido?</h1>
        <a style="color: #FE1391;" href="login.php">Login</a> or
        <a style="color: #FE1391;" href="signup.php">SignUp</a>
    <?php endif; ?>
    </div>  
    

</body>
</html>

