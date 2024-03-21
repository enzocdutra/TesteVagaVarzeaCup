
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
  

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/script.js"></script>
  <title>Profile</title>
</head>
<body>

  <header>
    <nav>

      <section class="mobile">
        <button type="menu" class="menu" onclick="openMenu()"><i class="fa-solid fa-bars"></i></button>
        <div class="logo">
          <h1>Varzea <i class="fa-solid fa-trophy"></i> Cup</h1>
        </div>
      </section>

      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
       
    <div class="overlay-content">
        <a href="profile.php"><i class="fa-solid fa-user"></i></a>
        <a href="index.php"><i class="fa-solid fa-house"></i></a>
        <a href="times.html"><i class="fa-solid fa-people-group"></i></a>
        <li><a href="partida.html"><i class="fa-solid fa-futbol"></i></a></li>
        <a href="classification.php"><i class="fa-solid fa-chart-simple"></i></a>
    </div>
    </div><!--overlay-content-->

    <section class="desktop">
      <nav>
        <ul>
          <div class="logo">
            <h1>Varzea <i class="fa-solid fa-trophy"></i> Cup</h1>
          </div>
        </ul>
      </nav>
    </section>
    </nav>

  </header>

 
  <main>
    <aside>
      <section class="main-content">
     
        <ul>
            <li><a href="profile.php"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="partida.html"><i class="fa-solid fa-futbol"></i></a></li>
         </ul>
  
      </section>
    </aside>
    <section class="container">
   
        <div class="profile"></div>
        <div class="information">
          <h1>Enzo Campão Dutra</h1>
          <span>Função: Desenvolvedor Front-end.</span>
          <div class="rank">
            <span>Rank: Junior.</span>
          </div>   
          <h1>Informações:</h1>
          <div class="grid-information">
            <div class="stats">
          <span><i class="fa-solid fa-user-graduate"></i></span>
            <h1>Análise e Desenvolvimento de Sistemas.</h1>
            </div>
      
            <div class="stats">
              <span><i class="fa-solid fa-phone"></i></span>
              <h1>(53) 991090923</h1>
             </div>
      
                <div class="stats">
                  <span><i class="fa-solid fa-at"></i></span>
                    <h1>enzocampaodutra2310@gmail.com</h1>
                </div>
      
                <div class="stats">
                  <span><i class="fa-solid fa-people-group"></i></span>
                    <h1>DEV FC</h1>
                </div>
          </div>
          <?php
          session_start();
        include_once('config.php'); 

        $sql = "SELECT * FROM usuarios ORDER BY id DESC";

        $result = $conexao->query($sql);
      ?>
      <div class="table-contai">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Time</th>
              <th>email</th>
              <th>Senha</th>
              <th>...</th>
            </tr>
          </thead>
          <tbody>
         <?php 
         while ($user_data = mysqli_fetch_assoc($result)) 
         {
          echo "<tr>";
          echo "<td>".$user_data['id']."</td>";
          echo "<td>".$user_data['username']."</td>";
          echo "<td>".$user_data['teamname']."</td>";
          echo "<td>".$user_data['email']."</td>";
          echo "<td>".$user_data['senha']."</td>";
          echo "<td> 
          <a href='edit.php?id=$user_data[id]' class='edit'><i class='fa-solid fa-pencil'></i></a>
          </td>";
          echo "<tr>";
         }
          ?>
          </tbody>
        </table>

      </div>
    </section>

    </main>
</body>
</html>