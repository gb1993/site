<html lang="pt-br"> 
<head>
 <meta charset="utf-8">
 <title>TESTE</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <?php 
    if ($_POST) 
    {
    //Carrega as classes do PHPMailer
    include("./phpmailer/src/phpmailer.php"); 
    include("./phpmailer/src/smtp.php"); 
    
    //envia o e-mail para o visitante do site
    $mailDestino = $_POST['txtEmail']; 
    $nome = $_POST['txtNome']; 
    $mensagem = "Obrigado pelo seu contato, responderemos ASAP!";
    $assunto = "Obrigado pelo seu contato!";
    include("./envio.php");
    }
    ?>

<form method="POST" name="formContato">
    <label>Informe seu nome: </label>
    <input type="text" name="txtNome" placeholder="João" class="form-control" required>
    <label>Informe seu e-mail: </label>
    <input type="email" name="txtEmail" placeholder="a@a.com" class="form-control" required>
    <label>Deixe sua mensagem: </label>
    <textarea rows="6" class="form-control" name="txtMensagem"></textarea>
    <div style="text-align:center">
        <button type="submit" class="btn btn-primary btn-lg"> Enviar Mensagem </button>
    </div>
</form> 
</body>
</html>