<?php
  include('config.php');
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/script.js"></script>
  
  <title>Login</title>
</head>
<header>
  <div class="logo">
    <h1>Varzea <i class="fa-solid fa-trophy"></i> Cup</h1>
  </div>
</header>
  

</header>
<body>
  <main>
    <div class="container">
      <form class="login-form" action="testLogin.php" method="POST">
        <i class="fa-solid fa-user"></i>
        <h2>Login</h2>
        <div class="input-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Digite seu email..." required>
        </div>
        <div class="input-group">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" placeholder="Digite Sua Senha..." required>
        </div>
        <button type="submit" id="submit" name="submit" value="enviar">Entrar</button>
        <a href="registrar.php" class="register-link">Registrar-se</a>
        <a href="classification.php" class="classification">Veja à classificação</a>
      </form>
    </div>
  </main>
  
</body>
</html>
