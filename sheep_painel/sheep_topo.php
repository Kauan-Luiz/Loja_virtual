<?php
require_once("sheep_checa.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= SHEEP_TITULO_PAINEL ?></title>
  <!-- Sheep CSS -->
  <?php require_once('sheep_css.php') ?>
  <!-- Sheep CSS -->
  <link rel='shortcut icon' type='image/x-icon' href='<?= SHEEP_ICONE ?>' />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

  <!--<div class="loader"></div>-->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky" >
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <!--<li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Buscar..." aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>-->
          </ul>
        </div>
        <ul class="navbar-nav navbar-right" >

       
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="bell" class="bell"></i>
              <span class="badge headerBadge1">
               7</span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Intenções de Compras de Hoje
                <div class="float-right">
                 
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                
                <a href="#" class="dropdown-item"> 
                  <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/sem-imagem.png" class="rounded-circle">
                  </span> 
                 
                    <span class="time messege-text">Teste</span>
                    <span class="time">77/77/7777</span>
                  </span>

                </a>
              
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Ver todos <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>




          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">

              
           <img alt="" src="assets/img/sem-imagem.png" class="user-img-radious-style">

             

              <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"> Maykon </div>

              <a href="" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Perfil
              </a>

              <!--<a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Atividades
              </a>-->

              <a href="" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Configurações
              </a>
              <div class="dropdown-divider"></div>
              <a href="sheep.php?sair=true" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Sair
              </a>
            </div>
          </li>
        </ul>
      </nav>




      <!--MENU LATERAL WEBTECPR.COM.BR MAYKON SILVEIRA--->
      <?php include_once('sheep_menu.php'); ?>
      <!--FIM MENU LATERAL WEBTECPR.COM.BR MAYKON SILVEIRA--->