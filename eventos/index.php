<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/footer.css" type="text/css"> 
    <link rel="stylesheet" href="../assets/css/navbar.css" type="text/css"> 
    <link rel="stylesheet" href="../assets/css/eventos.css" type="text/css">
	<link href="../assets/img/favicon.ico" type="image/x-icon" rel="icon"/>
    <title>CADS - Eventos</title>
</head>
<body>
    
</body>
</html>

<div class="agenda-academica">
    <a class="a-button" href="https://drive.google.com/file/d/1cdNfJObrAGOrlUeMtKCfkZ3goBJ9MXDl/view" target="_blank">Agenda Acadêmica</a>
</div>

<header class="header">
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <span>&nbsp;</span>
  <ul class="menu">
    <li><a href="../">Início</a></li>
    <li><a href="../conhecendo-o-cads/">Conhecendo o CADS</a></li>
    <li><a href="../diversidade/">Diversidade</a></li>
    <li><a href="../produtos/">Produtos</a></li>
    <li><a href=""><b>Eventos</b></a></li>
    <li><a href="../parceiros/">Parceiros</a></li>
    <li><a href="../desenvolvimento-de-sistemas/">Desenvolvimento de Sistemas</a></li>
    <li><a href="../faq/">FAQ</a></li>
    <li><a href="../fale-conosco/" id="last">Fale Conosco</a></li>
  </ul>
</header>

<div class="container">
    <h1 class="evento-titulo">Eventos CADS</h1>
    <h2 class="sub-titulo">
        <?php
            $mes = date('n');
            $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            echo $meses[$mes-1];
            echo "/";
            echo date('Y');
        ?>
    </h2>
    <iframe src="../assets/calendario/calendar.php" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>

<div class="faixa">
    <h1 class="faixa-texto">Dia 15 - Retorno das aulas</h1>
</div>
<div class="container">
    <div class="grid-conteudo">
        <div class="descricao">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae leo sed odio tincidunt fringilla. Sed ac malesuada tellus, vitae egestas lorem. In ultrices, sapien 
            non malesuada consectetur, eros sapien venenatis enim, ut finibus eros ligula placerat est. Fusce tellus lacus, rhoncus quis orci sed, consectetur aliquet augue. 
            Maecenas convallis purus ac risus rhoncus, sed aliquam purus iaculis. Sed sit amet eros faucibus, dapibus leo vitae, rhoncus orci. Donec dui velit, eleifend at euismod eu, 
            viverra volutpat nisl. Quisque elit libero, finibus in porta non, auctor id orci. Cras vestibulum leo et pulvinar condimentum. Morbi lacus justo, lacinia nec ligula nec, 
            varius efficitur mauris. Duis sit amet lorem risus. Fusce at gravida urna. Donec in nisi at neque aliquet ultricies.</p>
        </div>
        <div class="imagem">
            <img src="../assets/img/calendario.png" alt="">
        </div>
    </div>
</div>


<div class="redes-sociais">
    <h1>Redes Sociais</h1>
</div>
<div class="footer-basic"> 
    <footer>
        <div class="social">
            <a href="https://github.com/leovasc5/" target="_blank" title="Facebook do CADS"><i class="icon ion-social-facebook"></i></a>
            <a href="https://www.linkedin.com/in/leonardo-vasconcelos-paulino-7a0b41200/" target="_blank" title="Instagram do CADS"><i class="icon ion-social-instagram"></i></a>
            <a href="https://www.twitter.com/leovasc5/" target="_blank" title="Linkedin do CADS"><i class="icon ion-social-linkedin"></i></a>
            <a href="https://www.instagram.com/leovasc5/" target="_blank" title="YouTube do CADS"><i class="icon ion-social-youtube"></i></a>
        </div>
        <div class="grid">
            <div class="col endereco">
                <h2 id="endereco-titulo">Endereço</h2>
                <p>Centro Acadêmico de Desenvolvimento de Sistemas</p>
                <p>R. Pedro Rissato, 30 - Vila dos Remedios, Osasco - SP, 06296-220</p>
                <p><b>Email:</b> <a href="mailto:cads@etec.sp.gov.br" target="_blank">cads@etec.sp.gov.br</a></a></p>
                <h2 id="dev-titulo">Desenvolvedor</h2>
                <p>Leonardo Vasconcelos Paulino</p>
                <div class="dev-links">
                    <a href="https://github.com/leovasc5/" target="_blank" class="dev">GitHub</a>
                    <a href="https://www.linkedin.com/in/leonardo-vasconcelos-paulino-7a0b41200/" target="_blank" class="dev">Linkedin</a>
                    <a href="mailto:leovasc5@hotmail.com" target="_blank" class="dev">E-mail</a>
                </div>
            </div>
            <div class="col" id="images">
                <a href="https://www.cps.sp.gov.br" target="_blank"><img src="https://www.etecfranciscomorato.com.br//resources/site2/sp.png" class="cps-image" alt=""></a>
                <a href=""><img src="../assets/img/logo.png" class="logo-image" alt=""></a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>