<?php

require_once("connect.php");

if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($connect, $_POST['user']);
    $password = mysqli_real_escape_string($connect, $_POST['senha']);

    if (empty($user) || empty($password)) {
        die("Preencha todos os dados!");
    }

    $hashedPassword = hash('sha256', $password);

    //Irá pegar do banco de dados o usuário e senha adicionados, vai verficar se tem no banco;
    //  Se tiver irá acessar, senão irá sair
    $sql = "SELECT * FROM usuarios WHERE (nome='$user' AND senha='$hashedPassword')";
    $result = mysqli_query($connect, $sql);
    
    if (!$result) {
        die("Erro na consulta ao banco de dados: " . mysqli_error($connect));  // Handle query errors
        // Retorna uma descriçaõ do tipo de erro que aconteceu na tentativa de consulta do banco de dados.

    }

    // Caso haja algum número de cadastros de acordo, irá realizar o login do usuário
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $user;
        header("location: ../");
        exit();
    }
    else {
        echo "Erro ao logar";
    }
}
