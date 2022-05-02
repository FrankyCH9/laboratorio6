<html>
	<head>
		<title>Empresa de gaseosa</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
	$precio_de_la_gaseosa = floatval ($_POST['precio_de_la_gaseosa']);
	$cantidad = floatval ($_POST['cantidad']);
	$nue_precio=0.05*$precio_de_la_gaseosa;
	$compra=$nue_precio*$cantidad;
	$descuento=0.07*$compra;
	$pagar=$compra-$descuento;
	$caramelos=2*$cantidad;
	echo 'el nuevo precio de la gaseosa: ' . $nue_precio . "<br/>\n";
	echo 'el importe de la compra: ' . $compra . "<br/>\n";
	echo 'Valor de descuento: ' . $descuento . "<br/>\n";
	echo 'el importe a pagar: ' . $pagar . "<br/>\n";
	echo 'el obsequio de caramelos: ' . $caramelos . "<br/>\n";
}

?>
		<form method="post">
			<table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
				<tbody>
					<tr>
						<td>
							<label for="precio_de_la_gaseosa">Ingresa el precio de la gaseosa:</label>
						</td>
						<td>
							<input name="precio_de_la_gaseosa" required="required" step="0.000001" type="number" />
	 					</td>
	 				</tr>
					<tr>
						<td>
							<label for="cantidad">Ingresa la cantidad:</label>
						</td>
						<td>
							<input name="cantidad" required="required" step="0.000001" type="number" />
	 					</td>
	 				</tr>
					<tr align="center">
						<td colspan="2" rowspan="1">
							<input value="Procesar" type="submit" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>
