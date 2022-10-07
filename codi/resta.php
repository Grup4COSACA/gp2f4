<html>
<head>
	<title>EXECUCIÓ DE LA RESTA DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE L'OPERACIÓ RESTA DEL 2 OPERANDS INTRODUITS AL FORMULARI</u></p>		
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
			$resultat = $operand1 - $operand2;
			echo "<p>El resultat de $operand1 - $operand2 és igual a $resultat</p>";			
		?>
		<a href="resta.html">Torna a la pàgina anterior</a>
	</body>
</html>
