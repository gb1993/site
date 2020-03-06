<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Documentação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <link rel='shortcut icon' type='images/x-icon' href='images/favicon.ico'>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
  <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
                  <li class="nav-item">
                    <a class="nav-link " href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="training.html">Treinamento</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="share.html">Compartilhe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">Equipe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="test.html">Avaliação</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
   

    <div class="inner-page">
      <div class="slider-item" style="background-image: url('images/checklist.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Documentação Admissional</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section bg-light pb-5">
      <div class="container mb-5">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
                  <h1>Envio de Email</h1>
                  <span>Envio de email com link do formulário de documentação adimissional</span>
            </div>
          </div>
      </div>

      <?php 
        if ($_POST){
          include("/var/www/html/portal/PHPMailer/src/PHPMailer.php"); 
          include("/var/www/html/portal/PHPMailer/src/SMTP.php"); 
          $mailDestino = $_POST['destinatario'];  
          $mensagem = '<html>
          <style>
          /* Linked Styles */
          body { padding:0 !important; margin:0
          !important; display:block !important;
          min-width:100% !important; width:100% !important;
          background:#001736; -webkit-text-size-adjust:none
          }
          a { color:#66c7ff; text-decoration:none }
          p { padding:0 !important; margin:0 !important }         
          img { -ms-interpolation-mode: bicubic; /* Allow
          smoother rendering of resized image in Internet
          Explorer */ }
          .mcnPreviewText { display: none !important; }          
          /* Mobile styles */
          @media only screen and (max-device-width:
          480px), only screen and (max-width: 480px) {
          .mobile-shell { width: 100% !important;
          min-width: 100% !important; }
          .bg { background-size: 100% auto !important;
          -webkit-background-size: 100% auto !important; }
          .text-header,
          .m-center { text-align: center !important; }
          .center { margin: 0 auto !important; }
          .container { padding: 20px 10px !important }
          .td { width: 100% !important; min-width: 100%
          !important; }
          .m-br-15 { height: 15px !important; }
          .p30-15 { padding: 30px 15px !important; }
          .m-td, .m-hide { display: none !important;
          width: 0 !important; height: 0 !important;
          font-size: 0 !important; line-height: 0
          !important; min-height: 0 !important; }
          .m-block { display: block !important; }
          .fluid-img img { width: 100% !important;
          max-width: 100% !important; height: auto
          !important; }
          .column,
          .column-top,
          .column-empty,
          .column-empty2,
          .column-dir-top { float: left !important;
          width: 100% !important; display: block !important;
          }
          .column-empty { padding-bottom: 10px
          !important; }
          .column-empty2 { padding-bottom: 30px
          !important; }
          .content-spacing { width: 15px !important; }
          </style>
          </head>
          <body class="body" style="padding:0 !important;
          margin:0 !important; display:block !important;
          min-width:100% !important; width:100% !important;
          background:#001736;
          -webkit-text-size-adjust:none;">
          <table width="100%" border="0" cellspacing="0"
          cellpadding="0" bgcolor="#001736">
          <tr>
          <td align="center" valign="top">
          <table width="650" border="0"
          cellspacing="0" cellpadding="0"
          class="mobile-shell">
          <tr>
          <td class="td container"
          style="width:650px; min-width:650px;
          font-size:0pt; line-height:0pt; margin:0;
          font-weight:normal; padding:55px 0px;">
          <table width="100%" border="0"
          cellspacing="0" cellpadding="0">
          <tr>
          <td
          style="padding-bottom: 10px;">
          <table width="100%"
          border="0" cellspacing="0" cellpadding="0">
          <tr>
          <td class="tbrr
          p30-15" style="padding: 60px 30px;
          border-radius:26px 26px 0px 0px;"
          bgcolor="#12325c">
          <table
          width="100%" border="0" cellspacing="0"
          cellpadding="0">
          <tr>
          <td
          class="h1 pb25" style="color:#ffffff;
          font-size:40px; line-height:46px;
          text-align:center; padding-bottom:25px;">Bem
          Vindo, Fulano.</td>
          </tr>
          <tr>
          <td
          class="text-center pb25" style="color:#c1cddc;
          font-size:16px; line-height:30px;
          text-align:center; padding-bottom:25px;">Lorem
          ipsum dolor sit amet, consectetur adipisicing
          elit, sed do eiusmod <span class="m-hide"><br
          /></span>tempor incididunt ut labore et dolore
          magna aliqua.</td>
          </tr>
          </table>
          </td>
          </tr>
          </table>
          </td>
          </tr>
          </table>
          <!-- END Intro -->         
          <!-- Article / Full Width Image
          + Title + Copy + Button -->
          <table width="100%" border="0"
          cellspacing="0" cellpadding="0">
          <tr>
          <td
          style="padding-bottom: 10px;">
          <table width="100%"
          border="0" cellspacing="0" cellpadding="0"
          bgcolor="#0e264b">         
          <tr>
          <td
          class="p30-15" style="padding: 50px 30px;">
          <table
          width="100%" border="0" cellspacing="0"
          cellpadding="0">
          <tr>
          <td
          class="h3 pb20" style="color:#ffffff;
          font-size:25px; line-height:32px; text-align:left;
          padding-bottom:20px;">Lorem ipsum dolor sit
          amet</td>
          </tr>
          <tr>
          <td
          class="text pb20" style="color:#ffffff;
          font-family:Arial,sans-serif; font-size:14px;
          line-height:26px; text-align:left;
          padding-bottom:20px;">Lorem ipsum dolor sit amet,
          consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat.</td>
          </tr>
          <!-- Button -->
          <tr>
          <td
          align="left">
          <table border="0" cellspacing="0" cellpadding="0">
          <tr>
          <td class="blue-button text-button"
          style="background:#66c7ff; color:#c1cddc;
          font-size:14px; line-height:18px; padding:12px
          30px; text-align:center; border-radius:0px 22px
          22px 22px; font-weight:bold;"><a href="http://localhost/portal/form.php"
          target="_blank" class="link-white"
          style="color:#ffffff; text-decoration:none;"><span
          class="link-white" style="color:#ffffff;
          text-decoration:none;">CLIQUE AQUI</span></td></a>
          </tr>
          </table>
          </td>
          </tr>
          </table>
          </td>
          </tr>
          </table>
          </td>
          </tr>
          </table>                   
          <!-- Footer -->
          <table width="100%" border="0"
          cellspacing="0" cellpadding="0">
          <tr>
          <td class="p30-15 bbrr"
          style="padding: 50px 30px; border-radius:0px 0px
          26px 26px;" bgcolor="#0e264b">
          <table width="100%"
          border="0" cellspacing="0" cellpadding="0">
          <tr>
          <td
          align="center" style="padding-bottom: 30px;">
          <table
          border="0" cellspacing="0" cellpadding="0">         
          <tr>
          <td
          class="text-footer1 pb10" style="color:#c1cddc;
          font-size:16px; line-height:20px;
          text-align:center; padding-bottom:10px;">Dermage -
          Todos os direios reservados</td>
          </tr>
          <tr>
          <td
          class="text-footer2" style="color:#8297b3;
          font-size:12px; line-height:26px;
          text-align:center;">Praia de Botafogo, 440, Rio de
          janeiro</td>
          </tr>
          </table>
          </td>
          </tr>
          </table>
          <!-- END Footer -->
          </td>
          </tr>
          </table>
          </td>
          </tr>
          </table>
          </body>
          </html>';
          $assunto = $_POST['assunto'];
          include("./envio.php");
        }
      ?>

      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 order-2">
            <form method="post">
              <div class="row">
                <div class="col-md-9 form-group">
                  <label><h5>Para</h5></label>
                  <input type="email" name="destinatario" class="form-control" placeholder="Digite o E-mail de recebimento" required>
                </div>
                <div class="col-md-9 form-group">
                  <label><h5>Assunto</h5></label>
                  <input type="text" name="assunto" class="form-control" placeholder="Digite o Assunto" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Enviar" class="btn btn-primary px-3 py-3">
                </div>
              </div>              
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row mb-2">
        <div class="col-md-5 mb-5">
          <h3>Mídias Sociais</h3>
          <p class="mb-5">Siga nossas mídias sociais com conteudo exclusivo.</p>
          <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="https://twitter.com/dermagebrasil" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="https://www.youtube.com/channel/UCD-G3DENhBBf5dhIaHmxQmQ" class="p-2"><span class="fa fa-youtube"></span></a></li>
              <li><a href="https://www.linkedin.com/company/995235/" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="https://www.facebook.com/dermagebrasil/" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="https://www.instagram.com/dermagebrasil/" class="p-2"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
        <div class="col-md-5 mb-5 pl-md-5">
          <h3>Contato</h3>
          <ul class="list-unstyled footer-link">

            <li class="d-block"><span class="d-block">Telefone:</span><span class="ion-ios-telephone-outline 12 text-primary">  </span>(21)2529-9900</span></li>
            
            <li class="d-block"><span class="d-block">Celular:</span><span class="ion-social-whatsapp-outline 12 text-primary">  </span>(21)99627-9337</span></li>
            
            <li class="d-block"><span class="d-block">Email:</span><span class="ion-ios-email-outline 12 text-primary">  </span>secretariab@dermage.com.br</span></li>
          </ul>
        </div>
        <div class="col-md-2 mb-5">
          <h3>Links</h3>
          <ul class="list-unstyled footer-link">
            <li><a href="http://helpdesk.dermage.com.br" target="blank">Helpdesk</a></li>
            <li><a href="https://www.dermage.com.br" target="blank">Loja Virtual</a></li>
          </ul>
        </div>
      </div>
    </div>

  <footer>  
      <div class="row">
          <div class="col-12 text-md-center text-left">
              <p>Dermage | Todos os direitos reservados</p>
          </div>
      </div>
  </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>    
  </body>
</html>