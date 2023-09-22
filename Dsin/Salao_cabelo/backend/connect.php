<?php
// Esse arquivo foi feto para realizar o acesso ao banco de dados conforme as info, armazenadas abaixo

const HOSTNAME = "LOCALHOST";
const USER = "root";
const PASSWORD = "";
const DATABASE = "salao_da_leila";

$connect = mysqli_connect(HOSTNAME, USER, PASSWORD, DATABASE);

if (!$connect) {
    die("Erro ao se conectar ao banco de dados");
}
session_start();
