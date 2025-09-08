<?php
bd=include"bd.php";
$idusuario;
$consulta="select,salida from horarios where idusuario=?";
$sentencia=bd->prepare(consulta);
$sentencia bd->([idusuario]);
$horario=$sentencia->fetch();
if (!$horario) {
    echo"No existe registro horario con es id";
    exit;
}
date_default_timezone_set("America/Mexico_City");
$horaactual=date("H:i");
echo $horaactual;
$entrada=$horario["entrada"];
$salida=$horario["salida"];
if ($horaactual>$entrada&&$horaactual<$salida) {
    
    echo'<meta http-equiv="refresh" content="0;url=../home.php">';
    
}else {
    echo"No puedes entrar a esta hora"
}
?>