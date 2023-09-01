<?php

require_once("connect.php");

if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($connect, $_POST['user']);
    $password = mysqli_real_escape_string($connect, $_POST['senha']);

    if (empty($user) || empty($password)) {
        die("Preencha todos os dados!");
    }

    $hashedPassword = hash('sha256', $password);

    $sql = "SELECT * FROM usuarios WHERE (nome='$user' AND senha='$hashedPassword')";
    $result = mysqli_query($connect, $sql);
    
    if (!$result) {
        die("Erro na consulta ao banco de dados: " . mysqli_error($connect));  // Handle query errors
    }


    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $user;
        header("location: ../");
        exit();
    }
    else {
        echo "Erro ao logar";
    }
}
