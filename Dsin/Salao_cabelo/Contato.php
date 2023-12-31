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
                    <li><a href="index.php">Página Inicial
                    </a></li>
                    <li><a href="Galeria.php">Galeria De Fotos
                    </a></li>
                    <li><a href="Equipe.php">Equipe</a></li>
                    <li><a href="Sobre.php">Sobre
                    </a></li>
                    <li><a href="Contato.php" class="current-page">Contato</a></li>

                    <div class="right">
                        <?= !isset($_SESSION['user']) ? '<li><a href="Login.html" class="login">Login</a></li><li><a href="Cadastro.html" class="cadastro">Cadastro</a></li>' : "<li>".$_SESSION['user']."</li><li><a href='backend/sair.php'>Sair</a></li>"?>
                        
                        
                    </div>
                </ul>

            </nav>
        </div>
    </header>
    <main class="contact">
        <h1>Nosso contato</h1>
        <div class="flex-container">
            <div class="flex-item-left">
                <h4>Localização</h4>
                <p>Avenida Rio Branco 1222</p>
                <p>São Paulo, Marília</p>
                <h4>Celular</h4>
                <p>(14) 99845-6311</p>
                <h4>Email</h4>
                <p>salaodaleila@gmail.com</p>
            </div>
            <div class="flex-item-right">
                <form action="back.php" method="post">
                    <input type="text" id="fname" placeholder="Nome completo">
                    <input type="text" name="subject" id="subject" placeholder="Serviço que deseja">
                    <textarea name="" id="textarea" cols="30" rows="10" placeholder="Caso deseja alguma atenção especial por favor preencher"></textarea>
                    <button type="button">Send Message</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer">
        <h3><span id="demo"></span><a href="#">Salaodaleila.com.br</a></h3>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>