<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2021-02-26T12:48:20-03:00+187023">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>I-Manager - Você no controle</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <link rel="stylesheet" href="assets/css/boot.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn_login").click(function() {
                if ($("#senha").val() != $("#senha2").val()) {
                    alert("As senhas não coincidem!");
                    return false;
                } 
            });
        });


    </script>
</head>
<body>

<!--HEADER-->

<header class="main_header gradient gradient-green d-flex">
    <div class="container">
        <div class="main_header_logo">
            <a title="Home" href="./"><img src="images/logo.png" width="100px" class="align-self-center">
        </div>

        <nav class="main_header_nav">
            <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
            <div class="main_header_nav_links j_menu_mobile_tab">
                <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
                <a class="link transition radius active" title="Home" href="./">Home</a>
                <a class="link login transition radius icon-sign-in" title="Entrar" href="?file=auth-login">Entrar</a>
            </div>
        </nav>
    </div>
</header>

<!--CONTENT-->
<main class="main_content">
    <?php
    $file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($file)) {
        require __DIR__ . "/views/home.php";
    } elseif ($file && file_exists(__DIR__ . "/views/{$file}.php")) {
        require __DIR__ . "/views/{$file}.php";
    } else {
        require __DIR__ . "/views/404.php";
    }
    ?>
</main>

<!--FOOTER-->
<footer class="main_footer">
    <div class="container content">
        <section class="main_footer_content">
            <article class="main_footer_content_item">
                <h2>Sobre:</h2>
                <p>O CafeControl é um gerenciador de contas simples, poderoso e gratuito. O prazer de tomar um café e
                    ter o controle total de suas contas.</p>
                <a title="Termos de uso" href="?file=terms">Termos de uso</a>
            </article>

            <article class="main_footer_content_item">
                <h2>Mais:</h2>
                <a class="link transition radius active" title="Home" href="./">Home</a>
                <a class="link transition radius" title="Sobre" href="?file=about">Sobre</a>
                <a class="link transition radius" title="Blog" href="?file=blog">Blog</a>
                <a class="link transition radius" title="Entrar" href="?file=auth-login">Entrar</a>
            </article>

            <article class="main_footer_content_item">
                <h2>Contato:</h2>
                <p class="icon-phone"><b>Telefone:</b><br> +55 55 5555.5555</p>
                <p class="icon-envelope"><b>Email:</b><br> cafe@cafecontrol.com</p>
                <p class="icon-map-marker"><b>Endereço:</b><br> Fpolis, SC/Brasil</p>
            </article>

            <article class="main_footer_content_item social">
                <h2>Social:</h2>
                <a class="icon-facebook" href="#face" title="CafeControl no Facebook">/CafeControl</a>
                <a class="icon-instagram" href="#insta" title="CafeControl no Instagram">@CafeControl</a>
                <a class="icon-youtube" href="#yt" title="CafeControl no YouTube">/CafeControl</a>
            </article>
        </section>
    </div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>