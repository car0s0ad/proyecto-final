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
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicia sesión para publicar tu inmueble</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <?php include("header.php") ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido <?= $user['email']; ?>
      <br>Iniciaste sesión con éxito
      <a href="logout.php">
        Cerrar sesión
      </a>
    <?php else: ?>
      <h1>Inicia sesión o registrate</h1>

      <a href="login.php">Iniciar sesión</a> or
      <a href="signup.php">Registrarse</a>
    <?php endif; ?>
  </body>
</html>
