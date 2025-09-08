<?php	

	include_once("dbconnection.php");
	$mihtml = '<table border=1';	
	$mihtml .= '<thead>';
	$mihtml .= '<tr>';
	$mihtml .= '<th>idcrudindepediente</th>';
	$mihtml .= '<th>COD nombre</th>';
	$mihtml .= '<th>contrato</th>';
	$mihtml .= '<th>saldos</th>';
	$mihtml .= '<th>fecha</th>';
	$mihtml .= '<th>numerotelefono</th>';
	$mihtml .= '</tr>';
	$mihtml .= '</thead>';
	$mihtml .= '<tbody>';
	
	$resultado = "SELECT * FROM crudindepediente";
	$reaultado_ = mysqli_query($con, $resultado);
	while($resultado = mysqli_fetch_assoc($resultado)){
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
	$dompdf->load_html('<h1 style="text-align: center;">BaulPHP - Lista de Transacciones</h1>'. $mihtml .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir nombre de archivo
	$dompdf->stream(
		"Lista_Transacciones", 
		array(
			"Attachment" => false //Para realizar la descarga
		)
	);
?>