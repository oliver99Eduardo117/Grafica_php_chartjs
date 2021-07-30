<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafica</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.js"></script>
</head>

<body>
    <?php 
        require_once("./conexion.php");
            
   $consulta = "SELECT nombre FROM autos";
   
   $resultado = $objetoPDO->query($consulta);

   $consulta1 = "SELECT velocidad FROM autos";
   
   $resultado1 = $objetoPDO->query($consulta1);

   $resultado->fetch();
   $resultado1->fetch();
    ?>
    <canvas id="myChart" width="400" height="200"></canvas>

</body>
<script>
    var ctx = document.getElementById('myChart');
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
            data: { 
                labels: [<?php 
                
                    
                    while($registro = $resultado->fetch()) {
                    echo "'". $registro['nombre']."'",",";
                }
                            
                        
                        ?>],
                datasets: [{
                    label: 'Km/h',
                    data: [<?php
                    while($registro1 = $resultado1->fetch()) {
                        echo "'". $registro1['velocidad']."'",",";
                    }
                    
                    
                    ?>],
                    backgroundColor: [
                        'rgb(233, 119, 97 )',
                        'rgb(233, 140, 97 )',
                        'rgb(233, 163, 97 )',
                        'rgb(233, 204, 97)',
                        'rgb(179, 203, 91)',
                        'rgb(144, 203, 91)',
                        'rgb(98, 203, 91)',
                        'rgb(91, 203, 155)',

                    ],
                    borderColor: ['rgb(0, 0, 0)']
                }],
        
            }
        
    });
</script>

</html>



