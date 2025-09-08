<?php
if($archivo !=""){
$directorio=dir("../adjuntos");
echo "directorio: ".$directorio->path."<br>";
$nuevo=$directorio->path."/".$archivo_name;
@copy($archivo_name,$nuevo);
echo "archivo: ".$archivo."<br>";
echo "archivo_name: ".$archivo_name."<br>";
echo "El archivo se ha guardado correctamente.";
}
else{
echo "Selecciona el archivo a guardar en el servidor...";
}
$directorio->close;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="comprobacionadjuntar.php" method="post"enctype="multipart/form-data">
        <input type="file" name="archivo">

    </form>
</body>
</html>