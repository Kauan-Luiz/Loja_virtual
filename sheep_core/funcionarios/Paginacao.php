<?php

/**
 * Gerente de paginação - Sheep PHP
 * Classe para paginação de resultados
 * @copyright (c) 2021, Maykon Silveira - WEBTEC TECHNOLOGIES
 * Site oficial www.maykonsilveira.com.br EAD cursos online.
 */
class Paginacao {
    /** DEFINE O PAGER - MAYKON SILVERA WEBTECPR.COM.BR */
    private $Page;
    private $Limit;
    private $Offset;
    
    /** REALIZAR A LEITURA - MAYKON SILVERA WEBTECPR.COM.BR */
    private $Tabela;
    private $Termos;
    private $Places;
        
    /** DEFINE O PAGINATOR - MAYKON SILVERA WEBTECPR.COM.BR */
    private $Rows;
    private $Link;
    private $MaxLinks;
    private $First;
    private $Last;
    
    
    /** RENDERIZA O PAGINATOR - MAYKON SILVERA WEBTECPR.COM.BR */
    private $Paginator;
    
      /**
     * <b>Iniciar Paginação:</b> Defina o link onde a paginação será recuperada. Você ainda pode mudar os textos
     * do primeiro e último link de navegação e a quantidade de links exibidos (opcional)
     * @param STRING $Link = Ex: index.php?pagina&page=
     * @param STRING $First = Texto do link (Primeira Página)
     * @param STRING $Last = Texto do link (Última Página)
     * @param STRING $MaxLinks = Quantidade de links (5)
     */
    function __construct($Link, $First = null, $Last = null, $MaxLinks = null) {
        $this->Link = (string) $Link;
        $this->First = ( (string) $First ? $First : " Primeiro " );
        $this->Last = ( (string) $Last ? $Last : " Último ");
        $this->MaxLinks = ( (int) $MaxLinks ? $MaxLinks : 5);
    }

    /**
     * <b>Executar Pager:</b> Informe o índice da URL que vai recuperar a navegação e o limite de resultados por página.
     * Você devere usar LIMIT getLimit() e OFFSET getOffset() na query que deseja paginar. A página atual está em getPage()
     * @param INT $Page = Recupere a página na URL
     * @param INT $Limit = Defina o LIMIT da consulta
     */
    public function LerPaginas($Page, $Limit) {
        $this->Page = ( (int) $Page ? $Page : 1 );
        $this->Limit = (int) $Limit;
        $this->Offset = ($this->Page * $this->Limit) - $this->Limit;
    }

    /**
     * <b>Retornar:</b> Caso informado uma page com número maior que os resultados, este método navega a paginação
     * em retorno até a página com resultados!
     * @return LOCATION = Retorna a página
     */
    public function VoltaPaginas() {
        if ($this->Page > 1):
            $nPage = $this->Page - 1;
            header("Location: {$this->Link}{$nPage}");
        endif;
    }

    /**
     * <b>Obter Página:</b> Retorna o número da página atualmente em foco pela URL. Pode ser usada para validar
     * a navegação da paginação!
     * @return INT = Retorna a página atual
     */
    public function getPaginas() {
        return $this->Page;
    }

    /**
     * <b>Limite por Página:</b> Retorna o limite de resultados por página da paginação. Deve ser usada na SQL que obtém
     * os resultados. Ex: LIMIT = getLimit();
     * @return INT = Limite de resultados
     */
    public function getLimit() {
        return $this->Limit;
    }

    /**
     * <b>Offset por Página:</b> Retorna o offset de resultados por página da paginação. Deve ser usada na SQL que obtém
     * os resultado. Ex: OFFSET = getLimit();
     * @return INT = Offset de resultados
     */
    public function getOffset() {
        return $this->Offset;
    }

    
    /**
     * <b>Executar Paginação:</b> Cria o menu de navegação de paginação dentro de uma lista não ordenada com a class paginator.
     * Informe o nome da tabela e condições caso exista. O resto é feito pelo método. Execute um <b>echo getPaginator();</b>
     * para exibir a paginação na view.
     * @param STRING $Tabela = Nome da tabela
     * @param STRING $Termos = Condição da seleção caso tenha
     * @param STRING $ParseString = Prepared Statements
     */
    public function ListarPaginas($Tabela, $Termos = null, $ParseString = null){
        $this->Tabela = (string) $Tabela;
        $this->Termos = (string) $Termos;
        $this->Places = (string) $ParseString;
        $this->getSyntax();
    }

    
    /**
     * <b>Exibir Paginação:</b> Retorna os links para a paginação de resultados. Deve ser usada com um echo para exibição.
     * Para formatar as classes são: ul.paginator, li a e li .active.
     * @return HTML = Paginação de resultados
     */
    public function getPaginacao(){
        return $this->Paginator;
    }
    
     /**
     * ***********WEBTECPR.COM.BR*************
     * ********** PRIVATE METHODS *************
     * ************MAYKON***SILVEIRA************
     */
    
    //Cria a paginação de resultados
    private function getSyntax() {
        $read = new Ler();
        $read->Leitura($this->Tabela, $this->Termos, $this->Places);
        $this->Rows = $read->getContaLinhas();
         if($this->Rows > $this->Limit):
            $Paginas = ceil($this->Rows / $this->Limit);
            $MaxLinks = $this->MaxLinks;
            
            $this->Paginator = '';
              echo '<li class="page-item disabled" style="list-style-type:none!important;">';
              $this->Paginator .= "<a title=\"{$this->First}\" href=\"{$this->Link}1\" class=\"page-link page-link-prev\" > {$this->First}</a>";
              echo '</li>';
                    for ($iPag = $this->Page - $MaxLinks; $iPag <= $this->Page - 1; $iPag++):
                       if ($iPag >= 1):
                        echo '<li class="page-item" style="list-style-type:none!important;">';
                           $this->Paginator .= "<a title=\"Página {$iPag}\" class=\"page-link\"  href=\"{$this->Link}{$iPag}\">{$iPag}</a>";
                        echo '</li>';
                        endif;
                    endfor;
                    echo '<li class="page-item active" style="list-style-type:none!important;">';
                    $this->Paginator .= "<a class=\"page-link\" style=\"border:1px solid#777; color:#333; margin:5px; font-weight:700;\">{$this->Page}</a>";
                    echo '</li>';
         
                     for ($dPag = $this->Page + 1; $dPag <= $this->Page + $MaxLinks; $dPag++):
                       if ($dPag <= $Paginas):
                        echo '<li class="page-item" style="list-style-type:none!important;">';
                           $this->Paginator .= "<a title=\"Página {$dPag}\" class=\"page-link\"  href=\"{$this->Link}{$dPag}\">{$dPag}</a>";
                           echo '</li>';
                        endif;
                    endfor;
                    echo '<li class="page-item" style="list-style-type:none!important;">';
            $this->Paginator .= "<a title=\"{$this->Last}\" href=\"{$this->Link}{$Paginas}\" class=\"page-link page-link-next\" >{$this->Last} </a>";
            echo '</li>';
            $this->Paginator .="";
        endif;
    }
    
}

?>