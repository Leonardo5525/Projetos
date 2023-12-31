<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão da Leila</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/woman-with-long-hair.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div class="container container-nav">
            <div class="site-titulo">
                <h1>Salão da Leila</h1>
                <p class="subtitulo">Venha Se Embelezar Com Nossa Equipe</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Página inicial</a></li>
                    <li><a href="Galeria.php" class="current-page">Galeria</a></li>
                    <li><a href="Equipe.php">Equipe</a></li>
                    <li><a href="Sobre.php">Sobre</a></li>
                    <li><a href="Contato.php">Contato</a></li>

                    <div class="right">
                        <?= !isset($_SESSION['user']) ? '<li><a href="Login.html" class="login">Login</a></li><li><a href="Cadastro.html" class="cadastro">Cadastro</a></li>' : "<li>".$_SESSION['user']."</li><li><a href='backend/sair.php'>Sair</a></li>"?>
                        
                        
                    </div>
                </ul>

            </nav>
        </div>
    </header>
    <main>
        <div class="gallery-header">
            <h1>Aqui está um pouco de nossos momentos!!!</h1>
            <p>Espero que tenha apreciado a experiência e volte novamente!</p>
        </div>
        <div class="row gallery-row">
            <div class="column">
                <img src="img/freepik - 1.avif" alt="" style="width: 100%">
                <img src="img/pexels - 1.jpg" alt="" style="width: 100%">
                <img src="img/pexels - 2.jpg" alt="" style="width: 100%">
                <img src="img/freepik - 2.avif" alt="" style="width: 100%">
            </div>
            <div class="column">
                <img src="img/freepik - 3.jpg" alt="" style="width: 100%">
                <img src="img/freepik - 4.jpg" alt="" style="width: 100%">
                <img src="img/pexels - 3.jpg" alt="" style="width: 100%">
                <img src="img/pexels - 4.jpg" alt="" style="width: 100%">
            </div>
            <div class="column">
                <img src="img/freepik - 6.avif" alt="" style="width: 100%">
                <img src="img/pexels - 5.jpg" alt="" style="width: 100%">
                <img src="img/freepik - 7.avif" alt="" style="width: 100%">
                <img src="img/pexels - 6.jpg" alt="" style="width: 100%">
            </div>
            <div class="column">
                <img src="img/pexels - 8.jpg" alt="" style="width: 100%">
                <img src="img/pexels - 7.jpg" alt="" style="width: 100%">
                <img src="img/freepik - 8.avif" alt="" style="width: 100%">
                <img src="img/freepik - 9.avif" alt="" style="width: 100%">
            </div>
        </div>
    </main>
    <footer class="footer">
        <h3><span id="demo"></span><a href="#">Salão da Leila</a></h3>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>