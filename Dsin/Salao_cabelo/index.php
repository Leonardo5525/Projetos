<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão da Leila</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/woman-with-long-hair.png" type="image/x-icon">
    <style>
        #home {
            background: url('img/background.jpeg') no-repeat center center fixed;
            height: 90vh;
            position: relative;
            width: 100%;
            background-size: cover;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container container-nav">
            <div class="site-titulo">
                <h1>Salão da Leila</h1>
                <p class="subtitulo">Venha se embelezar com nossa equipe</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="current-page">Página inicial</a></li>
                    <li><a href="Galeria.php" class="">Galeria de fotos </a></li>
                    <li><a href="Equipe.php" class="">Equipe</a></li>
                    <li><a href="Sobre.php" class="">Sobre</a></li>
                    <li><a href="Contato.php" class="">Contato</a></li>

                    <div class="right">
                        <?= !isset($_SESSION['user']) ? '<li><a href="Login.html" class="login">Login</a></li><li><a href="Cadastro.html" class="cadastro">Cadastro</a></li>' : "<li>".$_SESSION['user']."</li><li><a href='backend/sair.php'>Sair</a></li>"?>
                        
                        
                    </div>
                </ul>

            </nav>
        </div>
    </header>
    <main>
        <div id="home">
            <div class="sobrepor">
                <div class="landing-text">
                    <h3>Marque já seu horário </h3>
                    <h1>Salão da Leila</h1>
                    <hr id="hr-main">
                    <a href="Contato.html" class="button btn-hire">Reservas</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>