<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado correctamente';
    } else {
      $message = 'Lo sentimos su cuenta ya es existente o tiene un error';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


    <div class="wrapper">
        <form action="register.php" method="POST">
            <h1>Register</h1>
            <?php if(!empty($message)): ?>
                <p style="color:green; text-align:center;"> <?= $message ?></p>
            <?php endif; ?>
            
            <div class="input-box">
                <input type="text" placeholder="email" name="email" required>
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <input class="input-box" type="submit" ></input>

            <div class="register-link"></div>
            <p>Do you have an account? <a href="Login.php" style="color:pink;">Sing up</a></p>
            <a href="index.php" style="color:pink; font-family:arial;"><center>regresar</center></a></p>
        </form>
    </div>

</body>

</html>