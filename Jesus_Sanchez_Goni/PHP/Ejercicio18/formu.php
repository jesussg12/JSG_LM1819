<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ccs/bootstrap.min.css"/>
</head>
<body>
    <?php
        $email = trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "UTF-8"));

        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso FROM alumnos as  alu inner join cursos as cur on alu.codigocurso = cur.idCurso WHERE alu.mail like '$email'") or die("Problemas en el select:".mysqli_error($conexion));

        if ($reg=mysqli_fetch_array($registros)) {
        echo "<table class='table table-striped'>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Email</th><th>Curso</th></tr>";
        } else echo "Error: No existe";
        mysqli_close($conexion);

    mysqli_close($conexion);
    ?>
    
</body>
</html>