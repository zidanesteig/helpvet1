<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Veterinário em poucos clicks.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>HelpVet</title>

    <!-- Page styles -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    a:link
    {
    text-decoration:none;
    }
    .img-responsive {
    max-width: 100%;
    height: auto;
    display: block;
    }

    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="img-responsive" src="images/HelpVet (10) (1).png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://helpvet.com.br/">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://helpvet.com.br/cliente/">Cliente</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://helpvet.com.br/veterinario/">Veterinário</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://helpvet.com.br/sobre">Sobre</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="mailto:contato@helpvet.com.br">Contato</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.jpeg">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-list__item"><i class="material-icons">account_circle</i><a  href="https://helpvet.com.br/appcliente/login.php"> Cliente</a></li>
            <li class="mdl-list__item"><i class="material-icons">pets</i><a  href="#"> Veterinário</a></li>
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/android-logo-white.png">
        </span>
        <nav class="mdl-navigation" style="background: #fff;">
          <a class="mdl-navigation__link" href="https://helpvet.com.br/">Home</a>
          <a class="mdl-navigation__link" href="https://helpvet.com.br/cliente/">Cliente</a>
          <a class="mdl-navigation__link" href="https://helpvet.com.br/veterinario/">Veterinário</a>
          <a class="mdl-navigation__link" href="https://helpvet.com.br/sobre">Sobre</a>
          <a class="mdl-navigation__link" href="mailto:contato@helpvet.com.br">Contato</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Acesso</span>
          <a class="mdl-navigation__link" href="https://helpvet.com.br/appcliente/login.php">Cliente</a>
          <a class="mdl-navigation__link" href="">Veterinário</a>
          <div class="android-drawer-separator"></div>
        </nav>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">

        <a href="#screens">
            </button>
          </a>
        </div>
        <div class="android-wear-section">
          <div class="android-wear-band">
            <div class="android-wear-band-text">
              <div class="mdl-typography--display-2 mdl-typography--font-thin">Dúvidas/Sugestões</div>
              <p class="mdl-typography--headline mdl-typography--font-thin">
                Use a aba contato para qualquer dúvida ou sugestão para nossa StartUp!
              </p>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                  <a href="https://www.appstore.com/">App Store</a> e <a href="https://play.google.com/store?hl=pt">Google Play</a> (em breve)
                </a>
              </p>
            </div>
          </div>
        </div>
        <br>
      <div class="android-screen-section mdl-typography--text-center">
          <a name="screens"></a>
          <div class="mdl-typography--display-1-color-contrast">SIGA-NOS NAS REDES SOCIAIS E ACOMPANHE NOSSAS ATUALIZAÇÕES! </div>
          <div class="android-screens">
            <div class="android-wear android-screen">
              <a class="android-image-link" href="https://facebook.com/helpvet.br/" target="_blank">
                <img class="android-screen-image" src="images/fb.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href=""></a>
            </div>
            <div class="android-phone android-screen">
              <a class="android-image-link" href="https://twitter.com/HelpVet_br" target="_blank">
                <img class="android-screen-image" src="images/twitter.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href=""></a>
            </div>
            <div class="android-tablet android-screen">
              <a class="android-image-link" href="https://www.instagram.com/helpvet_br/" target="_blank">
                <img class="android-screen-image" src="images/instagram.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href=""></a>
            </div>
          </div>
        </div>
        <br>
<div class= "formulario-duvidas">
  <?php
if (isset($_POST['BTEnvia'])) {

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
"secret"=>"6LeA7WUUAAAAAGBJgVi5NnitbnewA8L7ABmR3ZfY",
"response"=> $_POST["g-recaptcha-response"],
"remoteip"=> $_SERVER["REMOTE_ADDR"]
)));

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $recaptcha = json_decode(curl_exec($ch), true);
  curl_close($ch);

	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	//====================================================

	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//====================================================
	$email_remetente = "zidane@helpvet.com.br"; // deve ser uma conta de email do seu dominio
	//====================================================

	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "contato@helpvet.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email";
	$email_assunto = "Formulário HelpVet"; // Este será o assunto da mensagem
	//====================================================

	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n";
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n";
	$email_conteudo .= "Mensagem = $mensagem \n";
	//====================================================

	//Seta os Headers (Alterar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================

	//Enviando o email
	//====================================================
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
					echo "</b>E-Mail enviado com sucesso!</b>";
					}
			else{
					echo "</b>Falha no envio do E-Mail!</b>"; }
	//====================================================
}
?>
  <h4>Dúvidas/sugestões:</h4>
	<form action="<? $PHP_SELF; ?>" method="POST">
	<p style="font-size: 15px;">
		Nome:<br />
		<input type="text" required maxlength="20" size="30" name="nome" style="border: 2px solid #fff; border-bottom: 1px; padding: 1px 2px; font-family: sans-serif;">
	</p>
	<p style="font-size: 15px; ">
		E-mail:<br />
		<input type="text" required maxlength="30" size="30" name="email" style="border: 2px solid #fff; border-bottom: 1px; padding: 1px 2px; font-family: sans-serif;">
	</p>
	<p style="font-size: 15px;">
		Telefone:<br />
		<input type="text"  maxlength="12" size="30" name="telefone" style="border: 2px solid #fff; border-bottom: 1px; padding: 1px 2px; font-family: sans-serif;">
	</p>
	<p style="font-size: 15px;">
		Mensagem:<br />
		<textarea name="mensagem" rows="5" cols="34" style="border: 2px solid #fff; border-bottom: 1px; font-family: sans-serif;"></textarea>
	</p>
  <div class="g-recaptcha" data-sitekey="6LeA7WUUAAAAAGw4I1FtfRHHEKGMxxjoP5fWGFxW"></div>
	<p>
          <input type="submit" name="BTEnvia" value="ENVIAR" style="border: 2px solid #fff; font-family: 'Montserrat', sans-serif; font-weight: 600; FONT-SIZE: 11PX; background-color: #fff;">
	  <input type="reset" name="BTLimpa" value="LIMPAR" style="border: 2px solid #fff; font-family: 'Montserrat', sans-serif; font-weight: 600; FONT-SIZE: 11PX; background-color: #fff;">
        </p>
</div>
<div style="margin-top: -2px;">
        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top" style="color: #fff;">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light" style="margin: 0px;">HelpVet: © 2018</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
              Versions
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
              <li class="mdl-menu__item">5.0 Lollipop</li>
              <li class="mdl-menu__item">4.4 KitKat</li>
              <li class="mdl-menu__item">4.3 Jelly Bean</li>
              <li class="mdl-menu__item">Android History</li>
            </ul>
            <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
              For Developers
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
              <li class="mdl-menu__item">App developer resources</li>
              <li class="mdl-menu__item">Android Open Source Project</li>
              <li class="mdl-menu__item">Android SDK</li>
              <li class="mdl-menu__item">Android for Work</li>
            </ul>
            <a class="android-link mdl-typography--font-light" href="http://helpvet.com.br/">Home</a>
            <a class="android-link mdl-typography--font-light" href="mailto:contato@helpvet.com.br">Contato</a>
          </div>

        </footer>
      </div>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
