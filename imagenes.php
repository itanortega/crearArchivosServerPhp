<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Imágenes</title>
</head>
<body>
<form action="uploader.php" enctype="multipart/form-data" method="post">
  <br>Nombre: 
  <br><input type="text" name="nombre" required>
  <br><input id="imagen" name="imagen" size="30" type="file" required/>
  <br><br><input type="submit" value="Cambiar datos" />
</form>

<br>
<br>
<br>
<br>
<br>
<h1>Lista de imágenes</h1>
<?php
  $directorio = './imgs/';
  $ficheros1  = scandir($directorio);
  
  foreach($ficheros1 as $archivo){
    if($archivo!="." && $archivo!=".." && $archivo!=".DS_Store" && $archivo!="index.html"){
    echo '<a href="./imgs/'.$archivo.'" target="_blank"><img src="./imgs/'.$archivo.'" width="100" alt=""></a>';
    }
  }
?>
</body>
</html>