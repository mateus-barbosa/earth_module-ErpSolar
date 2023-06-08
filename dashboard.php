<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/terra.png" type="image/png" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="dashboard.css">
  
  <title>ERP Solar - Terra</title>
</head>

<body>
  <header>
    <img src="./assets/ERP-logo.svg" alt="Logo do ERP Solar">
    <h1>Dashboard</h1>
    <div></div>
  </header>

  <main>

    <?php
      include_once 'php/connect_db.php';
      $bd_connection = connection();

      $sql = "SELECT MONTHNAME(dt_venda) AS mes, COUNT(id_venda) AS total_vendas
        FROM venda
        GROUP BY mes
        ORDER by dt_venda;";

      $result = $bd_connection->query($sql);

    $dataArray = array();

    if ($result->num_rows > 0) {
      $count = 1; 

      while ($row = $result->fetch_assoc()) {
        $mes = $row['mes'];
        $quantidade = $row['total_vendas'];

        $cor = ($count % 2 == 0) ? 'silver' : '#e5e4e2';

        $dataArray[] = "['$mes', $quantidade, '$cor']";

        $count++;
      }}

      $dataString = implode(", ", $dataArray);


      echo "
          <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
      
          <script type='text/javascript'>
            google.charts.load('current', {
              packages: ['corechart']
            });
            
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Element', 'Quantidade', {
              role: 'style'
            }],
           $dataString
          ]);

          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
            {
              calc: 'stringify',
              sourceColumn: 1,
              type: 'string',
              role: 'annotation'
            },
            2
          ]);

          var options = {
            title: 'Quantidades de vendas/mês ',
            width: 1000,
            height: 500,
            bar: {
              groupWidth: '95%'
            },
            legend: {
              position: 'none'
            },
          };
          var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
          chart.draw(view, options);
        }
      </script>
      
      ";

    ?>

    
    
    


    
    <div id="columnchart_values" style="width: 1800px; height: 400px;"></div>
  </main>


</body>

</html>