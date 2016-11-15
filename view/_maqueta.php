<?php
/* Author: Mario Alexis Gonzalez Sepulveda  - E-Mail: necrillo@gmail.com - Twitter: @necrillo  */
require '../config.php';
session_start();
/* CHECK IF LOGIN EXIST */
if(!$_SESSION['login']){
  $_SESSION['alert_n'] = $_not_login;
  $location = 'index.php';
  header('Location:'.$location);
}
/* REQUIRES - NOT EREASE */
if(!$_SESSION['login']){
  require RUTA.'/resources/languages/english.php'; // Default
}else {
  require RUTA.'/resources/languages/'.$_SESSION['login']->language.'.php'; // Set by user
}
require RUTA.'/view/header.php';
/* OWN VARIABLES */
$title_page= "_ESQUELETO";
$sub_title_page= "";
?>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?=$title_page?></h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <form  method="post" action="#">
        <label>Ejemplo</label>
        <input type="text" class="form-control" name="ejemplo" value="Ejemplo">
        <br/>
        <input type="submit" class="btn btn-primary" value="Enviar">
      </form>
    </div>
  </div>
</div>
  <?php
require RUTA.'/view/footer.php';
?>
