<?php
    $nombre = $_POST['nombre'].".json";
    $contenido = $_POST['contenido'];
    $fp = fopen($nombre,"w");
    fwrite($fp, $contenido);
    fclose($fp);
    header('Location: ./index.php');

?>