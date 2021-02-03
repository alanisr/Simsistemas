<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ" crossorigin="anonymous"></script> 
    <title>Simulación de sistemas</title>
  </head>
  <body class="bg-light">

    <div class="container-fluid bg-dark py-5">
      <div class="container text-white">
      <h2 class="display-4">Cola infinita con un solo servidor</h2>
    </div>
  </div>

    <div class="container-fluid bg-light py-3">
      <div class="container">
    
        
      <p class="lead">Se tiene un sistema de espera donde los clientes llegan de acuerdo con una
        distribución de Poisson con tasa media de llegada de 20 clientes/hora, y son atendidos por el
        servicio A de acuerdo con una distribución uniforme a intervalos 4 ± 1.</p>
      <p class="lead">Simular para 30 clientes y encontrar:<br>
      a) Tiempo medio de espera de los clientes.<br>
      b) Tiempo medio en el sistema.<br></p>

      <h1 class="display-4">Solución</h1>

      <p class="lead">Sea X la variable aleatoria que representa el tiempo entre llegadas la cual es de
          tipo exponencial puesto que las llegadas son de Poisson, entonces la media M = 60/20 3
          y por lo tanto X = -3lnr<br><br>
          Sea Y la variable aleatoria que representa el tiempo de atención al cliente la cual es del
          tiempo de atención al cliente la cual es del tipo uniforme. Y= 2r+3<br></p>

      <p class="lead">Los números aleatorios que se usarán y los valores de X y Y, son:</p>
    </div>


    </div>

    <?php

    $llegadas = array(0.5391, 0.9335, 0.5352, 0.2892, 0.9926, 0.0676, 0.0300, 0.2427, 0.0235, 0.6536, 0.0726, 0.8052, 0.2100, 0.1600, 0.6720, 0.2573, 0.8419, 0.7630, 0.3972, 0.5995, 0.5656, 0.6516, 0.9174, 0.6739, 0.9888, 0.9722, 0.6387, 0.1973, 0.2522, 0.2415);

    $servicios = array(0.0300, 0.8952, 0.0683, 0.2100, 0.4945, 0.9373, 0.3972, 0.8293, 0.9448, 0.9935, 0.0803, 0.4743, 0.0726, 0.3146, 0.4857, 0.8419, 0.7499, 0.9325, 0.9175, 0.5237, 0.2537, 0.0235, 0.6454, 0.2556, 0.8053, 0.9485, 0.6952, 0.7630, 0.5200, 0.6750);

    $Vx = array(1.8535625895735, 0.20644294800108, 1.8753443105044, 3.7219103660926, 0.02228254748639, 8.0824418877997, 10.51967369196, 4.2477874987487, 11.252264573496, 1.275779206309, 7.8683710714542, 0.6499937556495, 4.681943244794, 5.4977443912449, 1.192490815377, 4.0725376790833, 0.51628210991556, 0.81149174309304, 2.7699460404334, 1.5349779135437, 1.7096044931993, 1.2849732067627, 0.2586350904572, 1.1840206410899, 0.033789576836132, 0.084581203112346, 1.3449612552438, 4.8690895978607, 4.132598566354, 4.2626574176685, 0);
    $Vy = array(3.06, 4.7904, 3.1366, 3.42, 3.989, 4.8746, 3.7944, 4.6586, 4.8896, 4.987, 3.1606, 3.9486, 3.1452, 3.6292, 3.9714, 4.6838, 4.4998, 4.865, 4.835, 4.0474, 3.5074, 3.047, 4.2908, 3.5112, 4.6106, 4.897, 4.3904, 4.526, 4.04, 4.35);

    $Totaltiempo = array();
    $Totalsistema = array();
    $Hllegada = 0;
    $Tiservicio = 0;
    $aux = 0;


    $Tiservicio = $Vx[0];
    $Hllegada = $Vx[0];

   
//comienza tabla aleatorios

    echo "<div class='container-fluid bg-light py-5'>";
    echo "<div class='container'>";
    echo "<div class='table-resposive'>";
    echo "<table class='table table-hover'>";
    echo "<thead class='thead-dark' text-white>";
    echo '<tr>';
      echo "<th>Aleatorio para X</th>";
      echo "<th>Valor de X</th>";
      echo "<th>Aleatorio para Y</th>";
      echo "<th>Valor de Y</th>";
    echo '</tr>';
    echo "</thead>";


    echo "<tbody>";
    for ($i=0; $i < 30 ; $i++) { 
      echo "<tr>";
      for ($j=0; $j < 1 ; $j++) { 
        echo "<td>".$llegadas[$i]."</td>";
        echo "<td>".number_format((-3)*(log($llegadas[$i])), 2, ".", ",")."</td>";
        echo "<td>".$servicios[$i]."</td>";
        echo "<td>".number_format((2*($servicios[$i])+3), 2, ".", ",")."</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    echo "</tbody>";
    echo "</div>";

    echo "<br>";
    echo "</div>";
    echo "</div>";
//termina tabla de aleatorios


//comienza tabla final 
    echo "<div class='container-fluid bg-light py-5'>";
    echo "<div class='container'>";
    echo "<div class='table-resposive'>";
    echo "<table class='table table-hover tavble-striped'>";
    echo "<thead class='thead-dark text-white'>";
    echo "<tr>";
    echo "<th scope = 'col'>Cliente</th>";
    echo "<th scope = 'col'>Tiempo entre llegadas</th>";
    echo "<th scope = 'col'>Hora de llegada</th>";
    echo "<th scope = 'col'>Tiempo de inicio servicio A</th>";
    echo "<th scope = 'col'>Tiempo del servicio A</th>";
    echo "<th scope = 'col'>Tiempo de salida del servicio A</th>";
    echo "<th scope = 'col'>Tiempo de espera en cola A</th>";
    echo "<th scope = 'col'>Tiempo en el sistema</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";

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
        $Totaltiempo[$i]=$aux-$aux1;


        echo "<td>".number_format(($aux+$Vy[$i])-$aux1, 2, '.', ','); //Tiempo en el sistema 
        $Totalsistema[$i]=($aux+$Vy[$i])-$aux1;


       //} 
      echo "</tr>";
    }

    echo "</table>";
    echo "</tbody>";
    echo "</div>";

    echo "</div>";
    echo "</div>";

    //termina tabla final

    
    
    //resultados finales
    echo "<div class='container-fluid bg-light py-3'>";
    echo "<div class='container'>";

    echo "<div class='alert alert-secondary'>";
    echo "<p class='lead text-center'>";
    echo "El total de espera en la cola A es ".number_format(array_sum($Totaltiempo), 2, '.', ',');
    echo "</p>";
    echo "</div>";


    
    echo "<div class='alert alert-secondary'>";
    echo "<p class='lead text-center'>";
    echo "El total de tiempo en el sistema es ".number_format(array_sum($Totalsistema), 2, '.', ',');
    echo "</p>";
    echo "</div>";
    

    echo "<div class='alert alert-info'>";
    echo "<p class='lead text-center'>";
    echo "El tiempo medio de espera es ".number_format((array_sum($Totaltiempo)/30), 2, '.', ',');
    echo "</p>";
    echo "</div>";


    echo "<div class='alert alert-info'>";
    echo "<p class='lead text-center'>";
    echo "El tiempo medio de en el sistema es ".number_format((array_sum($Totalsistema)/30), 2, '.', ',');
    echo "</p>";
    echo "</div>";



    echo "</div>";
    echo "</div>";




    ?> 



    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>