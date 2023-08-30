<?php

const HOSTNAME = "LOCALHOST";
const USER = "root";
const PASSWORD = "";
const DATABASE = "salao_da_leila";


$connect = mysqli_connect(HOSTNAME, USER, PASSWORD, DATABASE);

if (!$connect) {
    die("Erro ao se conectar ao banco de dados");
}


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['input-nome']);
    $subject = mysqli_real_escape_string($connect, $_POST['subject']);
    $description = mysqli_real_escape_string($connect, $_POST['text-nome']);
    
    if (empty($name) || empty($subject) || empty($description)) {
        die("Por favor, preencha todos os campos");
    }

    $sql = "INSERT INTO contato (name, subject, description) VALUES ('$name', '$subject', '$description')";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        header("Location: Contato.html");
    }else {
        echo "Erro ao enviar mensagem. Erro: " . mysqli_error($connect);
    }
}
