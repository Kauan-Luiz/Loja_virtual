
<?php 

$token = filter_input(INPUT_GET, 'token', FILTER_VALIDATE_INT);
if(!$token){
?>

        <!-- INICIO TOKEN MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA --->
        <div class="alert alert-danger alert-has-icon">
          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
          <div class="alert-body">
            <div class="alert-title">Erro!</div>
            Seu token de sessão expirou!
          </div>
        </div>
        <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<?php exit(); } ?>


<?php 
if(mb_strlen($token) < 10){
?>
 <!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 <div class="alert alert-danger alert-has-icon">
          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
          <div class="alert-body">
            <div class="alert-title">Erro!</div>
            Seu token de sessão é inválido!
          </div>
        </div>
        <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<?php  exit(); }?>


<?php 
  if($token > time() - 1){
?>
 <!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 <div class="alert alert-danger alert-has-icon">
          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
          <div class="alert-body">
            <div class="alert-title">Erro!</div>
            O que está tentando fazer? Dê um clique por vez
          </div>
        </div>
        <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

<?php exit(); }?>


<?php 
$sucessoMensagem = filter_input(INPUT_GET, 'sucesso', FILTER_VALIDATE_BOOLEAN);
if($sucessoMensagem){
?>
 <!-- INICIO ALERTA SUCESSO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
 <div class="alert alert-success alert-has-icon">
          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
          <div class="alert-body">
            <div class="alert-title">Sucesso!</div>
            Tudo certo!
          </div>
        </div>
        <!-- FIM ALERTA SUCESSO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<?php }?>


<?php 
$erroMensagem = filter_input(INPUT_GET, 'erro', FILTER_VALIDATE_BOOLEAN);
if($erroMensagem){
?>
<!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
<div class="alert alert-danger alert-has-icon">
          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
          <div class="alert-body">
            <div class="alert-title">Erro!</div>
            Ocorreu um erro!
          </div>
        </div>
<!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
     
<?php }?>