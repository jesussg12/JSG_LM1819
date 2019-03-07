<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div>
        <?php
            if (isset($RESQUET["error"])) {
                print "<p> style='color: red'> $RESQUEST[error]
            }
        ?>

    </div>

    <form method="POST" action="segundo.php">
    <p>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value=""/>
    </p>
    <p>
        <label for="password"></label>
        <input type ="password" name="password" id="password" value="">
    </p>
    <p>
        <input type="submit" value="Entar">
    </p>
    </form>
</body>
</html>