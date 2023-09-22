<?php

require_once "connect.php";

// Irá analisar se os dados (variáveis) estão todos preenchidos, assim qie se apertar o botão submit
if(isset($_POST['submit'])){
    // Essa fução remover/ bloquear qualqur código malicioso que o usuário possa adicionar.
    //  Assim protegendo hacker para acesso de dados
    $user = mysqli_real_escape_string($connect, $_POST['name']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $rg = mysqli_real_escape_string($connect, $_POST['rg']);
    $tel = mysqli_real_escape_string($connect, $_POST['number']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $cpf = mysqli_real_escape_string($connect, $_POST['cpf']);
    $nascimento = mysqli_real_escape_string($connect, $_POST['nascimento']);

    // Se qualquer uma das variáveis estiver vazia irá mostrar a mensagem "OU"
    if (empty($user) || empty($password) || empty($rg) || empty($tel) || empty($email) || empty($cpf)) {
        die("Preencha todos os dados!");
    }

    // Irá criptografar as senhas adicionadas no banco de dados;
    // Não é reversível, não é visual, irá sempre cripitografar a mesma senha da mesma forma;
    $hashedPassword = hash('sha256', $password);

    // Irá adiconar as informações no banco de dados, de acordo com as vairáveis, nessa ordem;
    $sql = "INSERT INTO usuarios (nome, RG, CPF, telefone, email, data_nascimento, senha)
            VALUES ('$user', '$rg', '$cpf', '$tel', '$email', '$nascimento', '$hashedPassword')";

    // Irá adicionar a uma variável para verificar com o banco de dados;
    $result = mysqli_query($connect, $sql);


    if($result) {
        echo "Cadastrado com sucesso";
    } else {
        echo "Falha ao se cadastrar: " . mysqli_error($connect);
    }
}

