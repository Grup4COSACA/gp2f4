<!DOCTYPE html>
<html lang="ca">
	<head>
		<meta charset="utf-8">
		<title>
			FORMULARI: CALCULADORA DE IP's
		</title>
    </head>
    <body>
        <p><u>Resultat del calcul de subxarxa</u></p>
        <?php
            require_once(__DIR__ . '/vendor/autoload.php');
            if ($_GET["op1"] =="") {
                $operand1 = 0;
            }
            else{
                $operand1 = $_GET["op1"];
            }
            if ($_GET["op2"] =="") {
                $operand2 = 0;
            }
            else{
                $operand2 = $_GET["op2"];
            }
            
            $sub= new IPv4\SubnetCalculator($_GET["op1"],$_GET["op2"]);
            $network = $sub->getNetworkportion();
            $broadcastAddress = $sub->getBroadcastAddress();
            $addressableHostRange = $sub->getAddressableHostRange();
            $numberHosts = $sub->getNumberAddressableHosts();
            echo "<p>Adreça IP de l'Equip: ".$_GET["op1"]."/".$_GET["op2"]."</p>";
            echo "<p>Adreça IP de la subxarxa: $network/".$_GET["op2"]."</p>";
            echo "<p>Adreça IP de broadcast: $broadcastAddress</p>";
            echo "<p>Marge d'adreces de host: des de $addressableHostRange[0] a $addressableHostRange[1]</p>";
            echo "<p>Quantitat equip dins de la subxarxa: $numberHosts</p>";

        ?>
        <a href="ip.html">Torna a la pàgina anterior</a>
    </body>
</html>
