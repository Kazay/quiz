<?php
  /*
  require(); //erreur en chargeant un fichier inexistant
  require_once(); //insère seulement si cela n'a pas déjà été fait

  include(); //pas d'erreur en chargeant un fichier inexistant
  include_once(); //insère seulement si cela n'a pas déjà été fait
  */
  require_once('./templates/head.html');
  //Si la superglobal $_GET contient 1 élément ou plus
  if(count($_GET) !== 0) {
    $documentState = file_exists('./pages/' . $_GET["myPage"] . '.html');


    if ($documentState) {
      //Si le document existe
      require_once('./pages/' . $_GET["myPage"] . '.html');
    } else {
      //Si le document n'existe pas
      require_once('./pages/404.html');
    }
  } else //Si la superglobal $_GET contient 0 élément
  {
    require_once('./pages/404.html');
    ;
  }
  require_once('./templates/foot.html');
