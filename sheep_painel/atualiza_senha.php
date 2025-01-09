<?php

//https://www.php.net/reserved.variables.server
require('../sheep_core/config.php');
require_once('sheep_top_login.php');

date_default_timezone_set('America/Sao_Paulo');

$horaAtual = filter_input(INPUT_GET, 'sh', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$cod = filter_input(INPUT_GET, 'validaCode', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//$ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP);
$ip = $_SERVER['REMOTE_ADDR'];
$horaAtual = base64_decode($horaAtual);
$email = base64_decode($email);

//echo "A hora atual é {$sh} e o nosso e-mail é: {$email} <hr>";
//echo $cod;

if($email == null){
  header("Location: " . URL_CAMINHO_PAINEL . "sheep_esqueceu.php?email_nao_existe=true");
  exit();
}

if($horaAtual == null){
    header("Location: " . URL_CAMINHO_PAINEL . "sheep_esqueceu.php?tempo_invalido=true");
    exit();
  }

  if($cod == null){
    header("Location: " . URL_CAMINHO_PAINEL . "sheep_esqueceu.php?email_nao_existe=true");
    exit();
  }
$sheep = new Ler();
$sheep->Leitura('usuarios', "WHERE email = :email AND codigo = :codigo AND hora = :hora", "email={$email}&codigo={$cod}&hora={$horaAtual}");
$checaEmail = Formata::Resultado($sheep);
if(!$checaEmail){
header("Location: " . URL_CAMINHO_PAINEL . "sheep_esqueceu.php?email_nao_existe=true");
exit();
}else{
 foreach($sheep->getResultado() as $cliente);
 $cliente = (object) $cliente;
}

$horaAgora = date('H');

if($horaAgora != $cliente->hora){
    header("Location: " . URL_CAMINHO_PAINEL . "sheep_esqueceu.php?tempo_invalido=true");
    exit();
}

$ip = $_SERVER['REMOTE_ADDR'];
$sheep = new Ler();
$sheep->Leitura('login_tetativas', "WHERE ip = :ip", "ip={$ip}");
?>


<body>
<?php if ($sheep->getContaLinhas() >= 3) { ?>

<?php  } else { ?>

  <div class="loader"></div>
<?php  } ?>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">

              <div class="card-header">
                <center>
                  <img src="<?= SHEEP_LOGO ?>" alt="<?= SHEEP_TITULO_PAINEL ?>" class="img-fluid">
                </center>

              </div>

              <?php
             
              //bloqueador firewall msflix - Maykon Silveira
              if ($sheep->getResultado()) {

                if ($sheep->getContaLinhas() >= 3) {


              ?>

                  <div class="alert alert-danger alert-has-icon" style="margin:3px auto;">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                      <div class="alert-title">Olá Cliente!</div>
                      Atenção! Você foi bloqueado, por favor entre em contato com o administrador do sistema <?= EMAIL ?>
                    </div>
                  </div>

              <?php
                  exit();
                }
              }
              ?>
             
              <div class="card-body">
                <form method="post" action="sheep-filtros/nova_senha.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Digite uma nova senha </label>
                    <div class="float-right">
                      <a href="index.php" class="text-small">
                        Entrar
                      </a>
                    </div>
                    <input id="email" type="password" class="form-control" name="senha" tabindex="1" placeholder="Digite uma nova senha" required autofocus>
                    <div class="invalid-feedback">
                     Sua nova senha
                    </div>
                  </div>

                  <input type="hidden" name="id" value="<?=$cliente->id?>">

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                     Gerar Nova Senha
                    </button>
                  </div>
                </form>

                <?php require_once('sheep_rodape_login.php'); ?>
                <!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->