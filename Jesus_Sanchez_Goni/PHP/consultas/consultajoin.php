<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso from alumnos as  alu inner join cursos as cur on alu.codigocurso = cur.idCurso") or die("Problemas con la consulta:".mysqli_error($conexion));

        echo "<table class='table table-striped'>";
        echo "<tr><th>Código</th><th>Nombre</th><th>Email</th><th>Curso</th></tr>";
        while ($reg = mysqli_fetch_array($registros)) {
            echo "<td>" .$reg['idAlumno'] . "</td>";
            echo "<td>" .$reg['nombre'] . "</td>";
            echo "<td>" .$reg['mail'] . "</td>";
            echo "<td>" .$reg['nombreCurso'] . "</td>";
            echo "</tr>";
        }

    mysqli_close($conexion);    

    ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</body>
</html>