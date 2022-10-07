<html>
<head>
	<title>EXECUCIÓ DE LA MULTIPLICACIÓ DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE L'MULTIPLICACIÓ SUMA DEL 2 OPERANDS INTRODUITS AL FORMULARI</u></p>		
		<?php
			#Obtenció del primer operand
			if ($_GET["op1"] =="") {
				$operador1 = 0;
			}
			else{
				$operador1 = $_GET["op1"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operador2 = 0;
			}
			else{
				$operador2 = $_GET["op2"];
			}
			#
			#Obtencio del resultat i mostrant el resultat
			$resultat = $operador1 * $operador2;
			echo "<p>El resultat de $operador1 * $operador2 és igual a $resultat</p>";			
		?>
		<a href="multiplicacio.html">Torna a la pàgina anterior</a>
	</body>
</html>
