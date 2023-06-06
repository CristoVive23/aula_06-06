<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Salário Mínimo', 'Preço do carro', 'Poder de compra'],
        
        <?php

        require_once "conn.php";
        
        $query = "SELECT * from graphicalexcar";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($list as $item) :
        ?>
                ['<?= $item['anoalex']; ?>', <?= $item['salarioalex']; ?>, <?= $item['lcaralex']; ?>, <?= $item['compraalex']; ?>],
        
        <?php endforeach; ?>

        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>