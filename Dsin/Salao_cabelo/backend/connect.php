<?php

const HOSTNAME = "LOCALHOST";
const USER = "root";
const PASSWORD = "";
const DATABASE = "salao_da_leila";

$connect = mysqli_connect(HOSTNAME, USER, PASSWORD, DATABASE);

if (!$connect) {
    die("Erro ao se conectar ao banco de dados");
}
session_start();
