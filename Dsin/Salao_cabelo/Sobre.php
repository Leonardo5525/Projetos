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
                    <li><a href="Galeria.php">Galeria de Fotos</a></li>
                    <li><a href="Equipe.php">Equipe</a></li>
                    <li><a href="Sobre.php" class="current-page">Sobre</a></li>
                    <li><a href="Contato.php">Contato</a></li>

                    <div class="right">
                        <?= !isset($_SESSION['user']) ? '<li><a href="Login.html" class="login">Login</a></li><li><a href="Cadastro.html" class="cadastro">Cadastro</a></li>' : "<li>".$_SESSION['user']."</li><li><a href='backend/sair.php'>Sair</a></li>"?>
                        
                        
                    </div>
                </ul>

            </nav>
        </div>
    </header>

    <main class="about">
        <div class="about-header">
            <h1>Sobre nossa história</h1>
        </div>
        <div class="about-content">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi architecto deserunt temporibus quam
                quasi, nisi corrupti accusantium fugiat est nemo tempora aliquam ut animi, enim porro veritatis quae
                doloremque vitae voluptas, molestias soluta rem adipisci consequatur. Maiores ab consequuntur vero?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi architecto deserunt temporibus quam
                quasi, nisi corrupti accusantium fugiat est nemo tempora aliquam ut animi, enim porro veritatis quae
                doloremque vitae voluptas, molestias soluta rem adipisci consequatur. Maiores ab consequuntur vero?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo hic vero excepturi perferendis quos
                asperiores modi eius enim magni nesciunt numquam nemo, sed totam, quaerat culpa earum dicta? Velit, id?
                Illum optio mollitia minus reprehenderit esse harum nostrum blanditiis animi culpa id ipsum temporibus
                magnam numquam unde ea magni, voluptas, maxime voluptatem tempore ipsa error expedita. Delectus magnam
                provident, cupiditate consectetur ipsum iste suscipit qui doloremque ad accusantium amet possimus vitae
                ullam numquam eaque iure sint dolorum libero non facilis.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat neque aliquam maiores excepturi in
                iusto quidem non. Officiis vitae placeat, iusto doloribus nisi soluta illo iste officia delectus
                aspernatur natus ipsam voluptatibus id in hic fugit voluptatem, tenetur sit error.</p>
        </div>
    </main>

    <footer class="footer">
        <h3><span id="demo"></span><a href="#">Salaodaleila.com.br</a></h3>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>