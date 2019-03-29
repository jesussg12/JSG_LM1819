<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paginación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    // Establecer la conexión
    $conexion = mysqli_connect("localhost", "root", "root", "cursophp")
      or die("Problemas de conexión");
    // cantidad de registros por página
    $por_pagina = 2;
    if (isset($_REQUEST['pagina'])) {
        $pagina = $_REQUEST['pagina'];
    } else {
        $pagina = 1;
    }
    // la página inicia en 0 y se multiplica por $por_pagina
    $empieza = ($pagina-1) * $por_pagina;
    // seleccionar los registros de la tabla con limit
    $resultado = mysqli_query($conexion, 
      "SELECT idAlumno, nombre, mail, codigocurso, nombreCurso
       FROM alumnos as alum inner join cursos as cur 
       on alum.codigocurso = cur.idCurso limit $empieza,$por_pagina")
       or die("Problemas en el select".mysqli_error($conexion));
    ?>
    <table border="2" cellpadding="3">
        <tr>
            <th>Nombre</th>
            <th>Mail</th>
            <th>Curso</th>
        </tr>
        <?php
            while($fila = mysqli_fetch_array($resultado)) {
        ?>
        <tr align="center">
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['mail'] ?></td>
            <td><?php echo $fila['nombreCurso'] ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <?php   
    // seleccionar toda la tabla de alumnos
    $resultado = mysqli_query($conexion, 
      "SELECT * FROM alumnos")
       or die("Problemas en el select".mysqli_error($conexion));
    // contar el total de registros
    $total_registros = mysqli_num_rows($resultado);
    // usar ceil para dividir el total de registros entre $por_pagina
    $total_paginas = ceil($total_registros / $por_pagina);
    // link a primera página
    echo "<a href='paginacion2.php?pagina=1'>".'Primera '."</a>";
    for ($i=1; $i<=$total_paginas ; $i++) { 
        echo "<a href='paginacion2.php?pagina=".$i."'> ".$i." </a>";
    }
        
    // link a la última página
    echo "<a href='paginacion2.php?pagina=$total_paginas'>".'Última '."</a>";
    mysqli_close($conexion);
    ?>
</body>
</html>