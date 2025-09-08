<?php  
    $servidor='localhost:3306';
	$contrasena = 'kondor25';
	$usuario = 'root';
	$nombrebd= 'bd_logins';

	try {
		$conexion = new PDO(
			"mysql:host=$servidor;
			dbname=$nombrebd;",
			$usuario,
			$contrasena
		);
        
	} catch (PDOException $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>