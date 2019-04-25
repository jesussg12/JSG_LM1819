<?php
header('Content-type: text/xml; charset="iso-8859-1", true);
echo '<?xml version="1.0" encoding="iso-8859-1"?>';

$conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "id9406790_bddrss") or die ("Problemas en la conexión");

$registro = mysqli_query($conexion, "SELECT * FROM noticias order by fecha desc") or die ("Problemas en la consulta".mysqli_error($conexion));

echo '<rss version="2.0">';
echo '<channel>';
echo '<title>Noticias IES</title>'>;
echo '<link>https://webrssies.000webhostapp.com</link>';
echo '<language>es</language>';
echo '<description>Canal de noticias del IES</description>';

while ($reg=mysqli_fetch_array($registros)) {
    echo '<item>';
    echo'<title>$reg[titulo]</title>';
    echo'<link>'.'</title>';
    echo'<pubDate>$reg[fecha]</title>';
    echo'<category>$reg[categoria]</title>';
    echo'<description$reg[noticias]</title>';
    echo'</item>';
}



echo '</channel>';

 }
    mysqli_close($conexion);
?>