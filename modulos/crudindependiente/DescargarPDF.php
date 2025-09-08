<?php	


	include_once("dbconnection.php");
	$mihtml = '<table border=1';	
	$mihtml .= '<thead>';
	$mihtml .= '<tr>';
	$mihtml .= '<th>crudiddepediente</th>';
	$mihtml .= '<th>Nombre</th>';
	$mihtml .= '<th>contrato</th>';
	$mihtml .= '<th>saldo</th>';
	$mihtml .= '<th>fecha</th>';
	$mihtml .= '<th>numerotelefono</th>';
	$mihtml .= '</tr>';
	$mihtml .= '</thead>';
	$mihtml .= '<tbody>';
	
	$resultado_row = "SELECT * FROM crudindepediente";
	$resultado_row = mysqli_query($con, $resultado_row);
	while($transacciones = mysqli_fetch_assoc($resultado_row)){
		$mihtml .= '<tr><td>'.$row['idcrudindepediente'] . "</td>";
		$mihtml .= '<td>'.$row['nombre'] . "</td>";
		$mihtml .= '<td>'.$row['contrato'] . "</td>";
		$mihtml .= '<td>'.$row['saldos'] . "</td>";
		$mihtml .= '<td>'.$row['fecha'] . "</td>";
		$mihtml .= '<td>'.$row['numerotelefono'] . "</td></tr>";		
	}
	
	
	$mihtml .= '</tbody>';
	$mihtml .= '</table';

	
	//referencia
	use Dompdf\Dompdf;

	// incluye autoloader
	require_once("dompdf/autoload.inc.php");

	//Creando instancia para generar PDF
	$dompdf = new DOMPDF();
	
	// Cargar el HTML
	$dompdf->load_html('<h1 style="text-align: center;">Lista de registros</h1>'. $mihtml .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir nombre de archivo
	$dompdf->stream(
		"Lista_Transacciones", 
		array(
			"Attachment" => true //Para realizar la descarga
		)
	);
?>