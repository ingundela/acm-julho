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
  <title>Arte &amp; Cultura em Movimento</title>
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
          <li class="nav-item active"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item "><a class="nav-link" href="sobre.php">sobre nós</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">serviços</a></li>
          <li class="nav-item"><a class="nav-link get_touch" href="projectos_culturais">projectos culturais</a></li>
          <li class="nav-item"><a class="nav-link get_touch" href="galeria">galéria</a></li>
          <li class="nav-item"><a class="nav-link get_touch" href="contacto">contactos</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="hero-caption text-center">
            <h1 class="title">promoção da arte &amp; cultura</h1>
            <p class="p_hero">Promovemos as artes e cultura como factor de desenvolvimento económico, social e humano em Moçambique, através da proteção, promoção e valorização do património material e imaterial.</p>
            <a href="#" class="btn btn_hero btn_left">contactar</a>
            <a href="#" class="btn btn_hero btn_right">serviços</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=" objective section_space text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="object_h3 text-center">Reunimos as pessoas certas para desafiar o pensamento estabelecido e impulsionar a transformação.</h3>
        </div>
      </div>
      <div class="objective_content">
        <div class="row">
          <div class="col-md-4">
            <div class="back_img">
              <i class="fas fa-align-right"></i>
              <h4>promover</h4>
              <p class="object_p">Promover a arte como um factor de desenvolvimento económico, social e humano.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="back_img">
              <i class="fas fa-align-center"></i>
              <h4>Divulgar</h4>
              <p class="object_p">Divulgamos informação relevante sobre programas de apoio a nível nacional e internacional.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="back_img">
              <i class="fas fa-align-left"></i>
              <h4>organizar</h4>
              <p class="object_p">Organizamos oficinas e residências para artistas, para atender as necessidades dos incentivar a produção de qualidade.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services section_space">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="sub_title">Serviços &amp; Actividades</h2>
        </div>
      </div>
      <div class="service_box">
        <div class="services_content">
          <div class="row">
            <div class="col-md-6">
              <div class="media">
                <i class="far fa-building service_icon"></i>
                <div class="media-body">
                  <h5 class="mt-0">Para empresas patrocinadoras</h5>
                  <ul class="list">
                    <li><i class="fas fa-check"></i> Gestão de Patrocinio</li>
                    <li><i class="fas fa-check"></i> Acessoria para análise de projectos culturais</li>
                    <li><i class="fas fa-check"></i> Formataҫão de políticas culturais</li>
                    <li><i class="fas fa-check"></i> Desenvolvimento de conceitos para projectos incentivados</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="media">
                <i class="fas fa-home service_icon"></i>
                <div class="media-body">
                  <h5 class="mt-0">Para instituiҫões culturais e artisticas</h5>
                  <ul class="list">

                    <li><i class="fas fa-check"></i> Capacitaҫão de recursos para projectos culturais</li>
                    <li><i class="fas fa-check"></i> Coordenaҫão geral para projectos culturais</li>
                    <li><i class="fas fa-check"></i> Formaҫão de projectos culturais para leis de insentivo e editais</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="service_box">
        <div class="services_content">
          <div class="row">
            <div class="col-md-6">
              <div class="media">
                <i class="fas fa-people-arrows service_icon"></i>
                <div class="media-body">
                  <h5 class="mt-0">Consultoria na elaboração e formatação de projectos</h5>
                  <p>Auxiliamos no desenvolvimento do planejamento, Criaҫão e revisão dos textos, orҫamentos, documentaҫão e anexos ( protfólio, cartas de anuência, direitos autoriais etc). Orientando sobre as melhores estratégias e alternativas para a sua aprovaҫão, execuҫão e captaҫão de recursos.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="media">
                <i class="fas fa-people-carry service_icon"></i>
                <div class="media-body">
                  <h5 class="mt-0">Consultoria na captação de recursos</h5>
                  <p>Este serviҫo visa capacitar o responsável pela mobilizaҫão da organizaҫão ou do projecto, direccionando os esforҫos de mobilizaҫão de recursos para potenciais parceiros e patrocinadores. Visa também sustentéveis as parcerias do projecto ou da Organizaҫão.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="service_box">
        <div class="services_content">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="media">
                <i class="fas fa-tasks service_icon"></i>
                <div class="media-body">
                  <h5 class="mt-0">Projectos culturais</h5>
                  <p>A assessoria para projectos culturais elabora e administra cada projecto, moldando-os de acordso com a ideia inicial proposta. </p>
                  <a href="#" class="btn_learm_more">Saiba mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="call_action_services">
        <div class="row">
          <div class="col-md-8">
            <h5> Você está procurando aconselhamento profissional para o seu setor?
            </h5>
          </div>
          <div class="col-md-4">
            <a href="#" class="btn btn_hero btn_right"><i class="fas fa-paper-plane"></i>Pedir orçamento</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="why_us section_space justify-content-between">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 border_color">
          <div class="back_img text-center">
            <i class="far fa-smile"></i>
            <h2 class="sub_title">Porquê nós?</h2>
            <a href="#" class="btn btn_hero btn_left why_btn">entrar em contacto</a>
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="sub_title">Agenciamos o seu talento !</h2>
          <p>Transformamos sonhos e ideias empreededoras em realidade viáveis, com foco no desenvolvimento da <span class="under_line">cultura</span>, <span class="under_line">turismo</span> e <span class="under_line">economia criativa</span></p>
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
        <div class="col-md-4">
          <h4>contactos</h4>
          <p><i class="fas fa-thumbtack"></i> Rua actriz Maria Matos, N. 4 R/C 2<br> Maputo-Moçambique</p>
          <p><i class="far fa-envelope"></i> info@arteculturaemmovimento.com</p>
          <p><i class="fas fa-mobile-alt"></i> +258 84 4846467</p>


        </div>
        <div class="col-md-2">
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
    <p>Copyright &copy; 2020. Todos direitos reservados. Desenvolvido por <a href="https://www.sbmozmedia.com/" target="_blank">Sbmozmedia &amp; Serviços - Agência de Marketing Digital</a></p>
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
