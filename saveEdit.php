<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $teamname = $_POST['teamname'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE usuarios SET username='$username', teamname='$teamname', email='$email', senha='$senha' WHERE id='$id'";

        
        $result = $conexao->query($sqlUpdate);
    }
    header('Location: registrar.php');
    ?>