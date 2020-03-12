<?php
    
    if(!is_dir($nome)){
        mkdir ($nome);

    } else {?>
        <div class="alert alert-danger" role="alert">
            Erro ao criar diretório.
        </div>
    <?php }

    if (move_uploaded_file ($identidade["tmp_name"], $nome . DIRECTORY_SEPARATOR . "identidade")){ 
        
    }

    if (move_uploaded_file ($cpf["tmp_name"], $nome . DIRECTORY_SEPARATOR . "CPF")){ 
        
    }

    if (move_uploaded_file ($foto["tmp_name"], $nome . DIRECTORY_SEPARATOR . "Foto 3x4")){ 
        
    }

    if (move_uploaded_file ($certidao["tmp_name"], $nome . DIRECTORY_SEPARATOR . "Certidão de Nascimento")){ 
        
    }

    if (move_uploaded_file ($residencia["tmp_name"], $nome . DIRECTORY_SEPARATOR . "Comprovante de residẽncia")){ 
        
    }

    if (move_uploaded_file ($escolaridade["tmp_name"], $nome . DIRECTORY_SEPARATOR . "Comprovante de escolaridade")){ 
        
    }

    if (move_uploaded_file ($eleitor["tmp_name"], $nome . DIRECTORY_SEPARATOR . "Titulo de Eleitor")){ 
        
    }

    ?>

   <div class="alert alert-success" role="alert">
      Documentos enviado com sucesso !
   </div>

