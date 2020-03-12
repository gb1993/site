
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Envio de Documentos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel='shortcut icon' type='images/x-icon' href='images/favicon.ico'>
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

    </header>

    <div class="top-shadow">
        <div class="inner-page">
            <div class="slider-item" style="background-image: url('images/documentos.jpg');">
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                        <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
                            <h1 class="pt-5"><span>Envio De Documentos</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section bg-light pb-5"> 
        <div class="container mb-5">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                    <h1>Anexo de Documentos</h1>
                    <span>Envie abaixo uma imagem nítida de sua documentação</span>
              </div>
            </div>
        </div>

        <?php
          if ($_SERVER ["REQUEST_METHOD"] === "POST"){
            $nome = $_POST['nome'];
            $identidade = $_FILES['identidade'];
            $cpf = $_FILES['cpf'];
            $foto = $_FILES['foto'];
            $certidao = $_FILES['certidao'];
            $residencia = $_FILES['residencia'];
            $escolaridade = $_FILES['escolaridade'];
            $eleitor = $_FILES['eleitor'];
            include("./files.php");
          }
        ?>
        
        <div class="container element-animate border border-warning rounded ">
            <div class="row ">
                <div class="col-md-6 m-5 order-2">
                    <form  method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8 mb-5">
                                <h4>Nome Completo</h4>
                                <input class="form-control" type="text" name="nome" required>
                            </div>
                            <div class="col-md-8 mb-5">
                                <h4>Identidade</h4>
                                <input type="file" name="identidade" >
                            </div>
                            <div class="col-md-4 mb-5">
                                <h4>CPF</h4>
                                <input type="file" name="cpf" >
                            </div>
                            <div class="col-md-8 mb-5">
                                <h4>Foto 3x4</h4>
                                <input type="file" name="foto" >
                            </div>
                            <div class="col-md-4 mb-5">
                                <h4>Certidão de Nascimento</h4>
                                <input type="file" name="certidao" >
                            </div>
                            <div class="col-md-8 mb-5">
                                <h4>Comprovante de Residência</h4>
                                <input type="file" name="residencia" >
                            </div>
                            <div class="col-md-4 mb-5">
                                <h4>Comprovante de Escolaridade</h4>
                                <input type="file" name="escolaridade" >
                            </div>
                            <div class="col-md-8 mb-5">
                                <h4>Título de Eleitor</h4>
                                <input type="file" name="eleitor" >
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
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
        <li class="d-block">
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
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>