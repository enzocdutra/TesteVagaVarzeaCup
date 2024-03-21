<?php

  if(!empty($_GET['id']))
  {

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
      while($user_data = mysqli_fetch_assoc($result)){
        $id = $user_data['id'];
        $username = $user_data['username'];
        $teamname = $user_data['teamname'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
      }
    }
    else{
      header('Location: login.php');
    }


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
            <form class="login-form" action="saveEdit.php" method="POST">
              <i class="fa-solid fa-user"></i>
              <h2>Registrar-se</h2>
              <div class="input-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value='<?php echo$email ?>' placeholder="Digite seu email..." required>
              </div>
              <div class="input-group">
                <label for="username">Insira seu nome:</label>
                <input type="username" id="username" name="username" value='<?php echo$username ?>' placeholder="Digite Seu Nome de Usuário..." required>
              </div>
              <div class="input-group">
                <label for="teamname">Insira o nome do seu Time:</label>
                <input type="teamname" id="teamname" name="teamname" value='<?php echo$teamname ?>' placeholder="Digite o Nome do seu Time..." required>
              </div>
              <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" value='<?php echo$senha ?>' placeholder="Digite Sua Senha..." required>
              </div>
              <button type="submit" name="update" id="update">Enviar</button>
              <br>
              <a href="login.php" class="register-link">Faça Login</a>
              <input type="hidden" name="id" value="<?php echo$id ?>">
            </form>
    </main>
 
  </div>
</body>
</html>
