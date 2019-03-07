<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
       $usuario= trim(htmlspecialchars(strip_tags($_RESQUEST[usuario]), ENT_QUOTES, "UTF-8"));
       $password= trim(htmlspecialchars(strip_tags($_RESQUEST["password"]), ENT_QUOTES, "UTF-8"));
       if (empty($usuario) || empty($password)) {
           header('location: primero.php?error= Debe rellenar los campos');
       }
?>    
</body>
</html>