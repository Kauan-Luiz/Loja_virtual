    <?php  
     ob_start();
    require_once('../sheep_core/config.php');

    

    if($_SESSION['sheep_user']){
        var_dump($_SESSION['sheep_user']);
      }else{
       echo "Não tem sessao";
      }
   
    
    $sair = filter_input(INPUT_GET, 'sair', FILTER_VALIDATE_BOOLEAN);
    if($sair){
        
        unset($_SESSION['sheep_user']);
        //setcookie("sheep_user", base64_decode("sheepPHP"), time() - 86400);
         //session_destroy();  
        
        header('Location: '.URL_CAMINHO_PAINEL.'index.php?sheep_saiu=true');
        
        
    }else{
        header('Location: '.URL_CAMINHO_PAINEL.'index.php');
    }
    ?>
