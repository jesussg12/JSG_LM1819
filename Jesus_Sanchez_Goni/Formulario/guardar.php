<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Guardar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php

    $autor= trim(htmlspecialchars($_RESQUEST["autor"]), ENT_QUOTES, "UTF-8"));
    $titulo= trim(htmlspecialchars($_RESQUEST["título"]), ENT_QUOTES, "UTF-8"));
    $categoria= trim(htmlspecialchars($_RESQUEST["categoría"]), ENT_QUOTES, "UTF-8"));
    $fecha= trim(htmlspecialchars($_RESQUEST["fecha"]), ENT_QUOTES, "UTF-8"));
    $texto= trim(htmlspecialchars($_RESQUEST["texto"]), ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_bddrss") or die ("Problemas en la conexión");

$registro = mysqli_query($conexion, "INSERT INTO  noticias(autor,título,categoría,fecha,noticia) VALUES ('$autor', '$titulo', '$CATEGORIA', '$FECHA', '$TEXTO')") or die ("Problemas en la consulta".mysqli_error($conexion));




 } else {
     header("Location: inicio.php?error='Email no encontrado'");
 }
    mysqli_close($conexion);
?>
    
</body>
</html>