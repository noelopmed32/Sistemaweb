<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="contrato" placeholder="contrato" value="<?= $row['contrato']?>">
                <input type="text" name="saldos" placeholder="saldos" value="<?= $row['username']?>">
                <input type="text" name="fecha" placeholder="fecha" value="<?= $row['password']?>">
                <input type="text" name="numerotelefonico" placeholder="numerotelefonico" value="<?= $row['email']?>">
                <a href="adjuntararchivo.php"></a><button type="submit">adjuntar</button>
                <button onclick="myfun()">Imprimir</button>
                
                <input type="submit" value="Actualizar">
            </form>
        </div>
        <
    </body>
</html>