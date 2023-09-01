<?php

require_once "connect.php";

if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($connect, $_POST['name']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $rg = mysqli_real_escape_string($connect, $_POST['rg']);
    $tel = mysqli_real_escape_string($connect, $_POST['number']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
    $nascimento = mysqli_real_escape_string($connect, $_POST['nascimento']);

    if (empty($user) || empty($password) || empty($rg) || empty($tel) || empty($email) || empty($cpf)) {
        die("Preencha todos os dados!");
    }

    $hashedPassword = hash('sha256', $password);

    $sql = "INSERT INTO usuarios (nome, RG, CPF, telefone, email, data_nascimento, senha)
            VALUES ('$user', '$rg', '$cpf', '$tel', '$email', '$nascimento', '$hashedPassword')";

    $result = mysqli_query($connect, $sql);


    if($result) {
        echo "Cadastrado com sucesso";
    } else {
        echo "Falha ao se cadastrar: " . mysqli_error($connect);
    }
}

