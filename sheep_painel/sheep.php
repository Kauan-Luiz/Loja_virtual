          <?php
          
/**********************************************************************
 * ********************************************************************
 * POR MAYKON SILVEIRA 
 * MSFLIX.COM.BR E MAYKONSILVEIRA.COM.BR
 * 
 * ********************************************************************
 * ********************************************************************
 * Que você seja abençoado em tudo que fizer com este sistema, 
 * contanto que seja justo em todas as suas ações.
 * Tudo correrá bem para você, se colocar o Criador dos céus e da terra, 
 * e nosso Senhor Jesus, em primeiro lugar em sua vida.
 * Muitas são as aflições dos justos, mas o Altíssimo os livra de todas.
 * Att, Maykon Silveira
 * ********************************************************************
 */
             // topo Maykon Silveira
             require_once('sheep_topo.php');

             $sheep_caminho_painel = '';
           
            if (!empty($ms)):
                $sheep_caminho_painel = __DIR__ . '/sheep_sistema/' . strip_tags(trim($ms) . '.php');
            else:
                $sheep_caminho_painel = __DIR__ . '/sheep_sistema/' . 'sheep_painel.php';
            endif;

            if(file_exists($sheep_caminho_painel)):
                include_once($sheep_caminho_painel);
            else:
                
                echo "Erro ao acessar a página /{$ms}.php!";
                 unset($_SESSION['sheep_user']);
                 header('Location: '.HOME);
           
            endif;

            // rodape Maykon Silveira
            require_once('sheep_rodape.php')
            ?>




  