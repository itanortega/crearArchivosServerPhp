<?php
  $archivo = "./archivos/".$_GET['get'] . ".json";
  $fp = fopen($archivo, "r");

  $linea = "";
  while(!feof($fp)) {
    $linea .= fgets($fp);
  }

  fclose($fp);

  header('Content-Type: application/json');
  echo $linea;
?>