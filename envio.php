<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

 $mail = new PHPMailer();
 $mail->IsSMTP(); 
 $mail->CharSet = 'UTF-8';
 $mail->Host = "smtp.gmail.com"; // Servidor SMTP
 $mail->SMTPSecure = "tls"; // conexão segura com TLS
 $mail->Port = 587; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = "gbanco1993@gmail.com"; // SMTP username
 $mail->Password = "Gbranco1993#"; // SMTP password
 $mail->From = "suaconta@gmail.com"; // From
 $mail->FromName = "RH Dermage" ; // Nome de quem envia o email
 $mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não 

if($mail->Send()) // Envia o email
 {?>
   <div class="alert alert-success" role="alert">
      Email enviado com sucesso !
   </div>
<?php } else{?>
   <div class="alert alert-danger" role="alert">
      Erro ao enviar o Email.
   </div>
 <?php } ?>