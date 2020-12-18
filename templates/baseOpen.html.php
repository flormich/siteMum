<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site Maman">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/button.css">
    <link rel="stylesheet" href="../assets/css/formulaire.css">
    <link rel="stylesheet" href="../assets/css/read.css"> 
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header margin-0">
  <header class="mdl-layout__header bandeau blue">
    <div class="mdl-layout__header-row ">
      <!-- Title -->
      <span class="mdl-layout-title">

      <!-- <a class="mdl-navigation__link" href="index"><img src= "../assets/pictures/icones/UrgenceEmploi.jpg" alt="StoreFreeze" width="25%"></a>-->
      <a class="mdl-navigation__link bandoIconeStoreFreeze" href="home"><img src="../assets/images/icone/StoreFreeze.jpg" alt="Accueil" width="12%" title="Accueil">&nbsp Accueil</a>

      </span>
      <!-- Add spacer, to align navigation to the right -->


      <div class="mdl-layout-spacer"></div>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
<!--        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder material-icons">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
-->
      </div>

      <!--Menu du haut -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link bandoIconeStoreProduct" href="readStore"><img src="../assets/images/icone/product.jpg" width="40%" title="Produits">&nbsp Produits</a>
        <a class="mdl-navigation__link bandoIconeStoreProduct" href="readRecette"><img src="../assets/images/icone/cookbook.jpg" width="40%" title="Recettes">&nbsp Recettes</a>&nbsp &nbsp
        <a class="mdl-navigation__link bandoIconeStoreProduct" href="readOrder"><img src="../assets/images/icone/shopping.png" width="40%" title="Commandeeeeer">&nbsp Commander</a>
        
        <!-- <a class="mdl-navigation__link" href="showCv">Voir CV</a>
        <a class="mdl-navigation__link" href="newCv">Créer CV</a> -->

      <!-- Right aligned menu below button -->
<!-- <button id="demo-menu-lower-right"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>
-->
<!--
<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-right">
  <a class="mdl-menu__item" href="new">S'inscrire</a>
  <a class="mdl-menu__item" href="login">Se connecter</a>
  <a class="mdl-menu__item" href="logout">Se déconnecter</a>
</ul>
-->
      </nav>
    </div>
  </header>
  
  <!-- Menu déroulant de gauche -->
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
    </span>
    <nav class="mdl-navigation menuLeft">
    <a class="menuLeft" href="home"><img src="../assets/images/icone/StoreFreeze.jpg" width="70%" title="Accueil"></a>
      <hr color="blue" size="10px">
      <a class="menuLeft" href="readStore"><img src="../assets/images/icone/product.jpg" width="40%" title="Produits">
      <a class="menuLeft" href="readRecette"><img src="../assets/images/icone/cookbook.jpg" width="40%" title="Recettes"></a></a>
      <a class="menuLeft" href="readOrder"><img src="../assets/images/icone/shopping.png" width="40%" title="Commander"></a>
      <br><br><br><br>
      <hr color="blue" size="10px">
      <a class="menuLeft" href="loginConnex"><img src="../assets/images/icone/shopping.png" width="40%" title="Connexion"></a>
      <br><br>
      
<!--       
      <a class="mdl-navigation__link" href="new">S'inscrire</a>
      <a class="mdl-navigation__link" href="login">Se connecter</a>
      <a class="mdl-navigation__link" href="logout">Se déconnecter</a>
      -->

    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->