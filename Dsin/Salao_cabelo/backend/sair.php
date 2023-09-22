<?php
// Somente faz o logOUT, está deslogando/ aniquilando a variável.
session_start();
unset($_SESSION['user']);
header('Location: ../');
