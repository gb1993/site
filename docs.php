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
          include("./phpmailer/src/phpmailer.php"); 
          include("./phpmailer/src/smtp.php"); 
          $mailDestino = $_POST['destinatario']; 
          //$nome = $_POST['nome']; 
          $mensagem = "";
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