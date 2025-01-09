<?php

session_start();
ob_start();
require('./sheep_core/config.php');


?>
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CAMINHO_TEMAS?>/assets/css/style.css">
    <title>Loja Virtual</title>
</head>
<body>
 
 <?php
        //inicia a leitura geral
        $sheep = new Ler();

        $Link = new Link;
        $Link->getTags();

       
        
?>
   

<?php

if(!require_once($Link->getPatch())):
   echo 'Erro ao incluir arquivo de navegação!';
endif;
?>

    
 <!-- Plugins JS File -->
   

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="<?=CAMINHO_TEMAS?>/assets/js/app.js"></script>
<script src="<?=CAMINHO_TEMAS?>/assets/js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

<!-- molla/index-3.html  22 Nov 2019 09:55:58 GMT -->
</html>
<?php
ob_end_flush();
?>