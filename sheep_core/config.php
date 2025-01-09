<?php
/*************************************************************************************
 * ***********************************************************************************
*CONFIGURAÇÕES FRAMEWORK SEEP PHP CRIADO POR MAYKON SILVEIRA - MAYKONSILVEIRA.COM.BR
*SOMOS TODOS(A) OVELHAS DO NOSSO MESSIAS E FILHOS DO ANCIÃO DE DIAS O SENHOR DOS EXÉRCITOS
*QUE O NOSSO BENDITO PAI ABENÇOE SUA VIDA E SEUS PROJETOS
*NUNCA MINTA, SEJA SEMPRE HONESTO E JUSTO, USE ESTE FRAMEWORK PARA O BEM E NUNCA PARA O MAL
*QUE O ETERNO PAI TE DÊ SABEDORIA E MUITAS FELICIDADES:
*QUE A PAZ ESTEJA COM VOCÊ ASS: MAYKON SILVEIRA
 * 
 
 * QUE A PAZ ESTE COM VOCÊ ASS: MAYKON SILVEIRA
 * ************************************************************************************
 * MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*****************
 * *************MAYKON***SILVEIRA*******************************************************
 * *************sheep**TECHNOLOGIES****************************************************
* **************************************************************************************
*POR MAYKON SILVEIRA MSFLIX.COM.BR E MAYKONSILVEIRA.COM.BR
*** ATUALIZADO UMA VEZ POR ANO *********************************************************
*TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS
*CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *******************************************
*TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNO PAI
*O SANTO SENHOR DEUS DE ABRAÃO, ISAAC E JACÓ E DO MEU ÚNICO SENHOR
*O MESSIAS NOSSO SALVADOR, POIS A GLÓRIA É DO PAI E DO FILHO PARA SEMPRE
**
 * ************************************************************************************
 * Que você seja abençoado em tudo que fizer com este sistema, 
 * contanto que seja justo em todas as suas ações.
* Tudo correrá bem para você, se colocar o Criador dos céus e da terra, 
* e nosso Senhor Jesus, em primeiro lugar em sua vida.
* Muitas são as aflições dos justos, mas o Altíssimo os livra de todas.
* Att, Maykon Silveira
 * ************************************************************************************
*/

 // determina o padrão de datas
date_default_timezone_set('America/Sao_Paulo');

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

//configurações do banco de dados
define('SHEEP_URL', 'localhost/loja_virtual');//ou dominio exemplo: maykonsilveira.com.br
define('SHEEP_HOST','localhost');
define('SHEEP_USER','root');
define('SHEEP_SENHA','');
define('SHEEP_BD','loja_virtual');
/**
 * para PostgreSQL 'SHEEP_TIPO_BANCO','pgsql'
 * para SQLite 'SHEEP_TIPO_BANCO','sqlite'
 * para MySQL 'SHEEP_TIPO_BANCO','mysql'
 */
define('SHEEP_TIPO_BANCO','mysql'); // MUITO IMPORTANTE

require_once('includes.php');


?>

