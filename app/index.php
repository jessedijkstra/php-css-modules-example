<?php
  require "../vendor/autoload.php";

  require_once("./components/grid/component.php");

  $templates = new League\Plates\Engine('./templates/');
  $templates->loadExtension(new ComponentExtension());

  // Render a template
  echo $templates->render('index');
?>
