<?php
$msg = "";

use PHPMailer\PHPMailer\PHPMailer;

include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
        $file = "attachment/" . basename($_FILES['attachment']['name']);
        move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
        $file = "";

    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587

    $mail->addAddress('info@arteculturaemmovimento.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email has been sent, thank you!";
    else
        $msg = "Please try again!";

    unlink($file);
}
?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="vAXOM-C5EUGGIwrxTNowJclsNz2vX4n1x9oochtq--s" />
    <title>Projectos Culturais - Arte &amp; Cultura em Movimento</title>
    <meta name="description" content="MeuPreço Supermercados, compara e poupa até 60% nas tuas compras de supermercado.">
    <meta name="keywords" content="MeuPreço Supermercados, compara e poupa até 60% nas tuas compras de supermercado.">
    <meta name="twitter:description" content="MeuPreço Supermercados">
    <meta name="twitter:title" content="SMeuPreço Supermercados">
    <meta name="twitter:description" content="MeuPreço Supermercados">
    <link rel="canonical" href="https://www.meupreco.co.mz/">
    <meta property="og:title" content="MeuPreço Supermercados">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.meupreco.co.mz/">
    <meta property="og:site_name" content="MeuPreço">

    <link rel="shortcut icon" type="image/png" href="img/fav_icon.jpg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">

    <script src="https://kit.fontawesome.com/b0d58c42f6.js" crossorigin="anonymous"></script>
</head>

<body id="home">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a><button class="navbar-toggler compressed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active"><a class="nav-link" href="sobre.php">sobre nós</a></li>
                    <li class="nav-item dropdown dropbtn"><a class="nav-link servi_icon" href="#">serviços</a>
                        <div class="dropdown-content">
                            <a href="design_development">consultoria</a>
                            <a href="e_commerce">curadoria</a>
                            <a href="digital_marketing">agenciamento</a>
                            <a href="digital_marketing">acessória</a>
                            <a href="professional_email">conferências</a>
                            <a href="web_maintenance">artes plásticas</a>
                            <a href="digital_marketing">artesanato</a>
                            <a href="digital_marketing">feiras &amp; exposições</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link get_touch" href="galeria">galéria</a></li>
                    <li class="nav-item"><a class="nav-link get_touch" href="contacto">contactos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="hero_other_pages">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-caption text-center">
                        <h1 class="title">sobre a arte e cultura em movimento</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sobre_nos section_space justify-content-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="sobre_nos_content">
                        <h2 class="sub_title">arte e cultura em movimento - <span class="acm">acm</span></h2>
                        <p>A <span class="color_blue">ACM</span> é uma empresa privada, moçambicana, vocacionada na promoção das Indústrias <span class="color_blue">Culturais</span> e <span class="color_blue">Criativas</span> em particular, nas artes e cultura no geral, se propõe a desenvolver acções, tendentes a dar sua contribuição na valorização sócio-económico das artes e cultura.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="sobre_img">
                        <img src="img/arte_hero.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_form section_space">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact_content">
                        <h2 class="sub_title">contactos</h2>
                        <p><i class="fas fa-thumbtack"></i> Rua actriz Maria Matos, N. 4 R/C 2<br> Maputo-Moçambique</p>
                        <p><i class="fas fa-mobile-alt"></i> +258 84 4846467</p>
                        <p> <i class="fas fa-mobile-alt"></i>+258 84 4846467</p>
                        <p><i class="far fa-envelope"></i> info@arteculturaemmovimento.com</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contactForm">
                        <h2 class="sub_title">já é agenciado por nós?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, perferendis rerum distinctio enim totam ut, pariatur officia, ullam maiores sint iure nobis tenetur repellat.</p>
                        <div class="row align-items-center">
                            <div class="col-md-12">

                                <?php if ($msg != "") echo "$msg<br><br>"; ?>

                                <div class="contact_form">
                                    <form method="post" action="sendemail.php" enctype="multipart/form-data">
                                        <input class="form-control" name="name" placeholder="Nome Completo..."><br>
                                        <input class="form-control" name="subject" placeholder="Assunto..."><br>
                                        <input class="form-control" name="email" type="email" placeholder="Email..."><br>
                                        <textarea placeholder="Mensagem..." class="form-control" name="message"></textarea><br>
                                        <input id="sendBtn" class="btn btn_hero" name="submit" type="submit" value="enviar">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer section_space">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="acm_bottom">
                        <img src="img/logo.png" alt="acm logo">
                        <p>A ACM é uma empresa privada, moçambicana, vocacionada na promoção das Indústrias Culturais e Criativas em particular, nas artes e cultura no geral, se propõe a desenvolver acções, tendentes a dar sua contribuição na valorização sócio-económico das artes e cultura.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Link dos Serviços</h4>
                    <ul class="list_unstyled services">
                        <li> <i class="fas fa-arrow-circle-right"></i><a href="design_development">consultoria</a></li>
                        <li> <i class="fas fa-arrow-circle-right"></i><a href="e_commerce">curadoria</a></li>
                        <li> <i class="fas fa-arrow-circle-right"></i> <a href="design_development">agenciamento</a></li>
                        <li> <i class="fas fa-arrow-circle-right"></i> <a href="design_development">acessória</a></li>

                        <li> <i class="fas fa-arrow-circle-right"></i><a href="design_development">conferências</a></li>
                        <li> <i class="fas fa-arrow-circle-right"></i> <a href="design_development">artes plásticas</a></li>
                        <li> <i class="fas fa-arrow-circle-right"></i> <a href="design_development">artesanato</a></li>
                        <li> <i class="fas fa-arrow-circle-right"></i> <a href="design_development">feiras &amp; exposições</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Redes Sociais</h4>
                    <ul class="list_unstyled social_media">
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-instagram-square"></i></li>
                        <li><i class="fab fa-linkedin"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sb_mozmedia text-center">
        <p>Copyright &copy; 2020. Todos direitos reservados. Desenhado e Desenvolvido por <a href="https://www.sbmozmedia.com/" target="_blank">Sbmozmedia &amp; Services - Digital Marketing Agency</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>
