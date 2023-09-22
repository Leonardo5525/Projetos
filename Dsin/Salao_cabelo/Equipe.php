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
                <p class="subtitulo">Venha se embelezar com nossa equipe</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Página inicial</a></li>
                    <li><a href="Galeria.php">Galeria</a></li>
                    <li><a href="Equipe.php" class="current-page">Equipe</a></li>
                    <li><a href="Sobre.php">Sobre</a></li>
                    <li><a href="Contato.php">Contato</a></li>

                    <div class="right">
                        <!-- Operador ternário, uma condicional para exibir no html o que será exposto ao usuário. -->
                        <!--Se estiver algum usuário em seção irá mostrar com o icone de usuário e um botão para sair-->

                        <?= !isset($_SESSION['user']) ? '<li><a href="Login.html" class="login">Login</a></li><li><a href="Cadastro.html" class="cadastro">Cadastro</a></li>' : "<li>".$_SESSION['user']."</li><li><a href='backend/sair.php'>Sair</a></li>"?>
                        
                        
                    </div>
                </ul>

            </nav>
        </div>
    </header>
    <main class="team">
        <div class="team-container">
            <div class="team-header">
                <h1>Nossa Equipe</h1>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <img src="img/pexels-Leila1.jpg" alt="" style="width: 100%">
                <h3>Leila da Silva</h3>
                <p>Cabelereira e fundadora</p>
                <img src="img/pexels - Thiago.jpg" alt="" style="width: 100%">
                <h3>Thiago Alves</h3>
                <p>Barbeiro</p>
            </div>
            <div class="column">
                <img src="img/pexels - Alassandra.jpg" alt="" style="width: 100%">
                <h3>Alassandra Garcia</h3>
                <p>Cabelereira e sócia</p>
                <img src="img/pexels - Bruno.jpg" alt="" style="width: 100%">
                <h3>Bruno Costa</h3>
                <p>Administrador e progrador do site</p>
            </div>
            <div class="column">
                <img src="img/pexels - Murilo.jpg" alt="" style="width: 100%">
                <h3>Murilo dos Santos</h3>
                <p>Barbereiro</p>
                <img src="img/pexels - Osvaldo.jpg" alt="" style="width: 100%">
                <h3>Osvaldo de Oliveira</h3>
                <p>Representante Comercial</p>
            </div>
            <div class="column">
                <img src="img/pexels - Lorena.jpg" alt="" style="width: 100%">
                <h3>Lorena Golçalves</h3>
                <p>Cabelereira</p>
                <img src="img/pexels - Amanda.jpg" alt="" style="width: 100%">
                <h3>Amanda Esteves</h3>
                <p>Recepcionista</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <h3><span id="demo"></span><a href="#">Salaodaleila.com.br</a></h3>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>