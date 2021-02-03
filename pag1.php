<!DOCTYPE html>
<html>
<head>
	    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ" crossorigin="anonymous"></script> 
	<title>Simulacion 1</title>
</head>
<body>

<?php

	echo "<table border= '1'>";
    echo "<tr>";
    echo "<th>Cliente</th>";
    echo "<th>Tiempo entre llegadas</th>";
    echo "<th>Hora de llegada</th>";
    echo "<th>Tiempo de inicio servicio A</th>";
    echo "<th>Tiempo del servicio A</th>";
    echo "<th>Tiempo de salida del servicio A</th>";
    echo "<th>Tiempo de espera en cola A</th>";
    echo "<th>Tiempo en el sistema</th>";
    echo "</tr>";

    for ($i=0; $i < 30 ; $i++) {
      echo "<tr>";
      //for ($j=0; $j < 1; $j++) { 
        echo "<td>".($i+1)."</td>"; //cliente
        echo "<td>".number_format($Vx[$i], 2, '.', ',')."</td>"; //Tiempo entre llegadas
        
        

        echo "<td>".number_format($Hllegada, 2, '.', ',')."</td>"; //Hora de llegadas
        $aux1=$Hllegada;
        $Hllegada = $Vx[$i] + $Vx[$i+1];

        
        echo "<td>".number_format($Tiservicio, 2, '.', ',')."</td>"; //Tiempo de incio del servicio bien
        $aux=$Tiservicio;

        $Tiservicio = $Vy[$i] + $Tiservicio;

        echo "<td>".number_format($Vy[$i], 2, '.', ',')."</td>"; //Tiempo del servicio A ok

        echo "<td>".number_format($aux+$Vy[$i], 2, '.', ',')."</td>"; //Tiempo de salida ok


        echo "<td>".number_format($aux-$aux1, 2, '.', ',')."</td>";//Tiempo de espera en cola A

        echo "<td>".number_format(($aux+$Vy[$i])-$aux1, 2, '.', ','); //Tiempo en el sistema 


       //} 
      echo "</tr>";
    }
    echo "</table>";

?>

<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>