<?php
  session_start();
?>

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
  <title>Varzea Cup</title>
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
        <li><a href="partida.html"><i class="fa-solid fa-futbol"></i></a></li>
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
    <section class="grid-content">
      <span>Proximos Jogos</span>
      <nav>
        <ul>
          <li><h1>Jogos</h1></li>
          <li><i class="fa-solid fa-chevron-left"></i>  <a href="">1ª Rodada </a> <i class="fa-solid fa-chevron-right"></i></li>
          <li>Dia - Data - Hora - Nome Do Campo</li>
          <li>Time A  <i class="fa-solid fa-x" style="color: crimson;"></i>  Time B</li>
        </ul>
      </nav>
      <!--tabela-classificação-->
     <span>Classificação</span> 
      <table>
        <thead>
            <tr>
              <th>Classificação</th>
              <th>Times</th>
                <th>PTS</th>
                <th>J</th>
                <th>V</th>
                <th>E</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1º</td>
                <td>Nome do Time</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2º</td>
                <td>Nome do Time</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>3º</td>
                <td>Nome do Time</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>4º</td>
                <td>Nome do Time</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>5º</td>
                <td>Nome do Time</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>6º</td>
                <td>Nome do Time</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>

    </section>
    
   
  </main>