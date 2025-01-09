 <script>
//FAZ A LEITURA DO DOCUMENTO SHEEP PHP - POR MAYKON SILVEIRA - EAD MAYKONSILVEIRA.COM.BR
$(document).ready(function() {
   

<?php 

//responsável por filtrar o que passa na uri sheep php - maykonsilveira.com.br EAD 
$shee_uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
//INSERIDO COM SUCESSO -  SHEEP PHP - POR MAYKON SILVEIRA - EAD MAYKONSILVEIRA.COM.BR
if (strrpos($shee_uri,  'sucesso')){ ?>
        
//abre o modal sucesso
$('#sucesso').modal('show');

//FECHA SHEEP o modal em 3 segundos
setTimeout(function() {
      $('#sucesso').modal('hide');
    }, 3000); // 3000 = 3 segundos
    
<?php }; ?> 
    
    
    <?php 



//ERRO NO SISTEMA -  SHEEP PHP - POR MAYKON SILVEIRA - EAD MAYKONSILVEIRA.COM.BR
if (strrpos($shee_uri,  'erro')){ ?>	
        
//abre o modal sucesso
$('#erro').modal('show');

//FECHA SHEEP o modal em 3 segundos
setTimeout(function() {
      $('#erro').modal('hide');
    }, 3000); // 3000 = 3 segundos
    
<?php }; ?>
    
  
    
    <?php 

//VERIFICA SE JA EXISTE O CONTEUDO SHEEP PHP - POR MAYKON SILVEIRA - EAD MAYKONSILVEIRA.COM.BR
if (strrpos($shee_uri,  'erroTemConteudo')){ ?>	
        
//abre o modal sucesso
$('#erroTemConteudo').modal('show');

//FECHA SHEEP o modal em 3 segundos
setTimeout(function() {
      $('#erroTemConteudo').modal('hide');
    }, 3000); // 3000 = 3 segundos
    
<?php }; ?> 
    
    
    <?php 

//DELETAR -  SHEEP PHP - POR MAYKON SILVEIRA - EAD MAYKONSILVEIRA.COM.BR
if (strrpos($shee_uri,  'delete')){ ?>	
        
//abre o modal sucesso
$('#delete').modal('show');

//FECHA SHEEP o modal em 3 segundos
setTimeout(function() {
      $('#delete').modal('hide');
    }, 3000); // 3000 = 3 segundos
    
<?php }; ?> 
    
    
    
    <?php 


//VERIFICA SE JA É TENTATIVA DE INVASÃO -  SHEEP PHP - POR MAYKON SILVEIRA - EAD MAYKONSILVEIRA.COM.BR
if (strrpos($shee_uri,  'sheep_firewall')){ ?>	
        
//abre o modal sucesso
$('#sheep_firewall').modal('show');

//FECHA SHEEP o modal em 3 segundos
setTimeout(function() {
      $('#webtec-firewall').modal('hide');
    }, 5000); // 3000 = 3 segundos
    
<?php }; ?> 
    
    <?php 


//VERIFICA E FAZ IMPRESSÃO - SHEEP PHP - POR MAYKON SILVEIRA - EAD MAYKONSILVEIRA.COM.BR
if (strrpos($shee_uri,  'imprimir')){ ?>	
        
//abre o modal sucesso
window.open();

    
<?php }; ?> 
  
});


</script>