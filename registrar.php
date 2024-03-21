<?php

  if(isset($_POST['submit']))
  {
    include_once('config.php');
    $username = $_POST['username'];
    $teamname = $_POST['teamname'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(username,teamname,email,senha)
    VALUE ('$username','$teamname','$email','$senha')");
    header('Location: login.php');
  }

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

  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/script.js"></script>
  
  <title>Registro</title>
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
            <form class="login-form" action="registrar.php" method="POST">
              <i class="fa-solid fa-user"></i>
              <h2>Registrar-se</h2>
              <div class="input-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Digite seu email..." required>
              </div>
              <div class="input-group">
                <label for="username">Insira seu nome:</label>
                <input type="username" id="username" name="username" placeholder="Digite Seu Nome de Usuário..." required>
              </div>
              <div class="input-group">
                <label for="teamname">Insira o nome do seu Time:</label>
                <input type="teamname" id="teamname" name="teamname" placeholder="Digite o Nome do seu Time..." required>
              </div>
              <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite Sua Senha..." required>
              </div>
              <button type="submit" name="submit" id="submit">Registrar-se</button>
              <a href="login.php" class="register-link">Faça Login</a>
            </form>
    </main>
 
  </div>
</body>
</html>
