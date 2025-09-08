<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registrarhoras.php" method="post">
        <select name="idusuario">
         <?php
         foreach ($usuarios as $usuario) { ?>
            # code...
            <option value="<?php echo $usuario["idusuario"]?>"><?php echo $usuario["name"]?></option>
         
         <?php } ?>
            
         
         
         
        </select>
        <p>Entrada</p>
        <input type="time" name="entrada" value="required">
        <<p>Salida</p>
        <<input type="time" name="salida" value="required">
        <button type="submit">Enviar
            
        </button>
    </form>
</body>
</html>