<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Ano');
        data.addColumn('number', 'Valor');
        data.addRows([
          <?php
            require_once "conn.php";
            $query = "SELECT * from graphicleonxeo";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($list as $item) :
          ?>
            ['<?= $item['anoleon']; ?>', <?= $item['xeonleon']; ?>],
          <?php endforeach; ?>
        ]);

        var options = {
          title: 'Processador Xeon comparação de preço',
          hAxis: {
            title: 'Ano',
          },
          vAxis: {
            title: 'Preço',
            minValue: 0,
            maxValue: 10
          }
        };

        var chart = new google.visualization.ColumnChart(
          document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px"></div>
  </body>
</html>