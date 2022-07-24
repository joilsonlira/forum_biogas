
<?php

$name = trim($_POST['nome_contato']);
//pega os dados que foi digitado no ID name.

$email = trim($_POST['email_contato']);
//pega os dados que foi digitado no ID email.

$subject = trim($_POST['assunto']);
//pega os dados que foi digitado no ID sebject.

$message = trim($_POST['mensagem_contato']);
//pega os dados que foi digitado no ID message.
$myEmail = "secretaria@abiogas.org.br";//é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $myEmail\r\n";

$email_to = 'mkt@anexoeventos.com.br';
//não esqueça de substituir este email pelo seu.

$corpo = $subject."\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Mensagem: " . $message . "\n";


$status = validar_email($nome, $subject, $message,$corpo, $headers, $email_to);

function validar_email($nome, $subject, $message,$corpo, $headers, $email_to){
    if($nome === "" or $subject == "" or $message === ""){
        gravar($corpo."data/hora: ".$agora = date('d/m/Y H:i').";\n");
    
        $status = false;
    }else{
        gravar($corpo."data/hora: ".$agora = date('d/m/Y H:i').";\n");
        $status = mail($email_to, $subject, $corpo, $headers);
    
        $status = true;
        //enviando o email.
    }
    return $status;
}

if ($status== 1) {
    $status_mensage = 'Enviado com sucesso!';
    
    //mensagem de form enviado com sucesso.
    
    } else {
    $status_mensage = 'erro no envio';
    
    //mensagem de erro no envio. 
    
}


//Criamos uma função que recebe um texto como parâmetro.
function gravar($texto){
    //Variável arquivo armazena o nome e extensão do arquivo.
    $arquivo = "contato_arquivo.txt";
        
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen($arquivo, "a+");

    //Escreve no arquivo aberto.
    fwrite($fp, $texto);
        
    //Fecha o arquivo.
    fclose($fp);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!--META-TAGS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="../../styles/fonts.css">
    <link rel="stylesheet" href="../../styles/index.css">
    <link rel="stylesheet" href="../../styles/index_media.css">


    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="../../components/images/facvicon.png">
    <title>Seminário técnico da Abiogas 2022 </title>

</head>
<body>
    <main>

    <!-- <header id="main_header">
            <nav id="main_nav">
                
                <ul class="nav_menu">
                    <li class="nav_item"><a href="#inscription" class="nav_link">Inscreva-se</a></li>
                    <li class="nav_item"><a href="#call" class="nav_link">Quem somos</a></li>
                    <li class="nav_item"><a href="#schedule" class="nav_link">Programação</a></li>
                    <li class="nav_item"><a href="#secondary_slide_container" class="nav_link">Patrocinadores</a></li>
                    <li class="nav_item"><a href="#main_footer" class="nav_link" onclick="open_modal('modal_contato')">Fale conosco</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </header> -->
        
        <section id="secondary_slide_container">
            <section class="patrocinadores">
                <header class="edicoes_title">
                    <div class="icon">
                        <img src="../../components/images/icon_header.png" alt="">
                    </div> 
                    <h2>PATROCINADORES</h2>
                </header>
                <div class="patrocinadores_container">
                    <div class="patrocinador_content">
                        <h2>Por que patrocinar?</h2>
                        <ul>
                            <li>
                                <span>Contato direto com empresas</span> e empresários com grande poder de decição.
                            </li>
                            <li>     
                                <span>Possibilidade de visibilidade para sua empresa,</span> mediante apresentação/palestra durante a
                                programação do evento (dependo da cota).
                            </li>
                            <li>
                                <span>Entrega de folders e materiais</span> promocionais para os participantes.
                            </li>
                            <li>
                                <span>Stand para networking.</span>
                            </li>
                            <li>
                                <span>Área do patrocinador</span> no site do evento (link direcionando para o seu site, ou fale conosco).
                            </li>
                            <li>
                                <span>Mailing dos participantes</span> do evento (seguimos as normas da LGPD).
                            </li>
                        </ul>
                        <button id="myBtn">Quero ser um patrocinador</button>
                    </div>
                </div>

                <!--Modal -->
                <div id="modal_patrocinar" class="modal" style="display: flex; align-items: center;
    justify-content: center;">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <form class="modal_form" style="padding: 1rem;">
                          <?php
                            echo "<h2>".$status_mensage."</h2>";
                          ?>
                          
                        </form>
                    </div>
                </div>
            </section>
        </section><!--sessão destinada a slide automatico-->

        <footer id="main_footer">
            <section class="abiogas">
                <div class="logo_footer">
                    <a href="https://abiogas.org.br/" target="_blank"><img src="../../components/images/logo_abiogas_site.png" alt=""></a>
                </div>
            </section>
                <button id="btn_contato" onclick="open_modal('modal_contato')">Fale conosco</button>
            </div>
            <ul class="social_container">
                <li class="social"><a href="https://www.instagram.com/abiogas/" target="_blank"><img src="../../components/images/Instagram - Negative.svg" alt=""></a></li>
                <li class="social"><a href="https://www.facebook.com/abiogas" target="_blank"><img src="../../components/images/Facebook - Negative.svg" alt=""></a></li>
                <li class="social"><a href="https://www.linkedin.com/company/abiogas" target="_blank"><img src="../../components/images/LinkedIn - Negative.svg" alt=""></a></li>
            </ul>
        </footer>
    </main>
    <script>console.log({<?php $arr_controle ?>})</script>
    <script>
        setTimeout(function() {
            window.location.href = "https://forumdobiogas.com.br/";
        }, 500);
    </script>
    <script src="../../scripts/js/index.js"></script>
</body>
