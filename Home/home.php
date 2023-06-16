<?php
session_start();
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: http://localhost/Catsnack/Logincadastro/cadastro.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catsnack</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300&display=swap" rel="stylesheet">
</head>

<body>

    <nav>
        <img class="logo" src="logo.PNG">
        <ul>
            <li>
                <div class="home">
                    home
                    <div class="underline"></div>
                </div>
            </li>
        </ul>

        </ul>
        <ul>
            <li>
                <div class="menu">
                    menu
                    <div class="underline2"> </div>
                </div>
            </li>
        </ul>
        <ul>
            <li>

                <div class="aboutus">
                    about us
                    <div class="underline3"> </div>
                </div>
            </li>
        </ul>

        <ul>
            <li>
                <div class="logout"><a href="logout.php">Logout</a></div>
                <div class="underline4"> </div>

            </li>
        </ul>

        <ul>
            <li>
                <div class="olausuario" style="left: 100%; position: relative;">
                    <?php include 'ola_usuario.php'; ?>
                </div>
            </li>
        </ul>
    </nav>
    <div class="meio">
        <script type="text/javascript" src="script.js"></script>

        <div class="carousel">
            <div>
                <a href="https://www.example.com/page1">
                    <img src="gato.png" width="600px" height="300px" alt="Image 1">
                </a>
            </div>
            <div>
                <a href="https://www.example.com/page2">
                    <img src="bar.png" width="600px" height="300px" alt="Image 2">
                </a>
            </div>
            <div>
                <a href="https://www.example.com/page3">
                    <img src="cafegato.png" width="600px" height="300px" alt="Image 3">
                </a>
            </div>
        </div>

       

        <div class="resposta">
        <img src="logo2.png" class="logo2" id="logo">
        <br><br><br>
            <span id="qna"><strong>Quem somos?</strong></span>

            <br><br><br>

            <span id="resp"><strong> Somos a Catsnack, um café feito para os
                amantes de gatos e para o seu gato!</strong></span>

        <br><br><br>
            <span id="linha">_____________________</span>

            <br><br>

            <span id="qna">Q&A</span>
        </div>
    </div>

</body>

<script>
    $(document).ready(function () {
        $('.carousel').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>


</html>