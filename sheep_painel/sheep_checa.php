<?php
ob_start();
session_cache_expire(60);
session_start();
require('../sheep_core/config.php');



//proteção para o formalário 
$_SESSION['_sheep_firewall'] = (!isset($_SESSION['_sheep_firewall'])) ? hash('sha512', random_int(100, 5000)) : $_SESSION['_sheep_firewall'];

//protação para url do painel de controle 
$_SESSION['timeWT'] = (!isset($_SESSION['timeWT'])) ?  time() : $_SESSION['timeWT'];

$see_uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$ms = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>