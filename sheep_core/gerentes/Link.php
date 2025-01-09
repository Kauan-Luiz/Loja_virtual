<?php

/**
 * Link [ MODEL ]
 * Classe responsável por organizar o SEO do sistema e realizar a navegação!
 * 
 * @copyright (c) MAYKONSILVEIRA.COM.BR 
 */
class Link {

    private $File;
    private $Link;

    /** DATA */
    private $Local;
    private $Patch;
    private $Tags;
    private $Data;

    /** @var Google */
    private $Google;
    
    function __construct() {
        $this->Local = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
        $this->Local = ($this->Local ? $this->Local : 'index');
        $this->Local = explode('/', $this->Local);
        $this->File = (isset($this->Local[0]) ? $this->Local[0] : 'index');
        $this->Link = (isset($this->Local[1]) ? $this->Local[1] : null);
        $this->Google = new Google($this->File, $this->Link);
    }

    public function getTags() {
        $this->Tags = $this->Google->getTags();
        echo $this->Tags;
    }

    public function getData() {
        $this->Data = $this->Google->getData();
        return $this->Data;
    }

    public function getLocal() {
        return $this->Local;
    }

    public function getPatch() {
        $this->setPatch();
        return $this->Patch;
    }

    //PRIVATES
    private function setPatch() {
        if (file_exists(MODELO . '/' . $this->File . '.php')):
            $this->Patch = MODELO . '/' . $this->File . '.php';
        elseif (file_exists(MODELO . '/' . $this->File . '/'. $this->Link . '.php')):
            $this->Patch = MODELO .'/' . $this->File . '/' . $this->Link . '.php';
        else:
            $this->Patch = MODELO . '/' . '404.php';
        endif;
    }

}
