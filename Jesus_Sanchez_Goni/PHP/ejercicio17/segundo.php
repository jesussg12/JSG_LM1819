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
        $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
        if (!EMPTY($referer)) {
            echo "<p><a href='$referer'>Volver</a></p>";
        } else {
            echo "<p><a href='javascript:history.go(-1)'>Volver</a></p>";
        }




       $usuario= trim(htmlspecialchars(strip_tags($_RESQUEST["usuario"]), ENT_QUOTES, "UTF-8"));
       $password= trim(htmlspecialchars(strip_tags($_RESQUEST["password"]), ENT_QUOTES, "UTF-8"));
       if (empty($usuario) || empty($password)) {
           header('location: primero.php?error= Debe rellenar los campos');
       } else if ($password != "1234") {
           header('location: primero.php?error=Password Incorrecta');
       } else {
           setcookie("usuarioWeb", $usuario, time()+60*60*24*365);


           session_start();
           $_SESSION['nombreUsuario'] = $usuario;
           ?>
           <div style="margin: 0 auto; width: 200px">
                <form method="GET" action="tercero.php">
                <p>
            
                        <label for="edad">Edad:</label>
                        <input type="date" name="edad" id="edad"/>
                </p>
                <p>
                    <input type= "submit" value="enviar"/>
                </p>
            </form>
            </div>


           <?php


       }
?>    
</body>
</html>