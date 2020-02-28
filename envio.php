<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

 $mail = new PHPMailer();
 $mail->IsSMTP(); // envia por SMTP 
 $mail->CharSet = 'UTF-8';
 $mail->Host = "outlook.office365.com"; // Servidor SMTP
 $mail->Port = 587; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = "gbranco@dermage.com.br"; // SMTP username
 $mail->Password = "Derma2020."; // SMTP password
 $mail->setFrom('gbranco@dermage.com.br', 'RH Dermage');
 $mail->AddAddress($mailDestino); // Email e nome de quem receberá
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

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