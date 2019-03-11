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
        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso from alumnos as  alu inner join cursos as cur on alu.codigocurso = cur.idCurso") or die("Problemas con la consulta:".mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registros)) {
            echo "Codigo: " .$reg['idAlumno'] . "<br>";
            echo "Nombre: " .$reg['nombre'] . "<br>";
            echo "Email: " .$reg['mail'] . "<br>";
            echo "Curso: " .$reg['nombreCurso'] . "<br>";
        }
    mysqli_close($conexion);    

    ?>

    
</body>
</html>