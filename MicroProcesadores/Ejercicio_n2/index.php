<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio N2</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<form method="POST" action="index.php">
  <div class="group">
    <input type="text" name="name1" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Nombre1</label>
  </div>
    <div class="group">
    <input type="text" name="dato1" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Dato1</label>
  </div>
  <div class="group">
    <input type="text" name="name2" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Nombre2</label>
  </div>
  <div class="group">
    <input type="text" name="dato2" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Dato2</label>
  </div>
  <div class="group">
    <input type="text" name="name3" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Nombre3</label>
  </div>
  <div class="group">
    <input type="text" name="dato3" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Dato3</label>
  </div>
  <div class="group">
    <input type="text" name="name4" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Nombre4</label>
  </div>
  <div class="group">
    <input type="text" name="dato4" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Dato4</label>
  </div>
  <div class="group">
    <input type="text" name="name5" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Nombre5</label>
  </div>
  <div class="group">
    <input type="text" name="dato5" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Dato5</label>
    <select class="bar" name="grafico">
        <option value="barra">Gráfica de barra</option>
        <option value="torta">Gráfica circular</option>
        <option value="linea">Gráfica de línea</option>
        <option value="radar">Gráfica de Radar</option>
        <option value="polar">Gráfic de Área Polar</option>
    </select>
  </div>
  <input type="submit" value="Crear" class="button buttonBlue" name="nuevo">
</form>
<canvas id="myChart"></canvas>
<canvas id="densityChart"></canvas>
<canvas id="oilChart"></canvas>
<canvas id="marksChart"></canvas>
<canvas id="birdsChart"></canvas>

<?php
if (isset($_POST["nuevo"])) {
  if ($_REQUEST["grafico"] == "barra") {
      $nam1 = $_POST["name1"];
      $nam2 = $_POST["name2"];
      $nam3 = $_POST["name3"];
      $nam4 = $_POST["name4"];
      $nam5 = $_POST["name5"];

      $dat1 = $_POST["dato1"];
      $dat2 = $_POST["dato2"];
      $dat3 = $_POST["dato3"];
      $dat4 = $_POST["dato4"];
      $dat5 = $_POST["dato5"];
    echo "<script>
      var densityCanvas = document.getElementById('densityChart');

var densityData = {
  label: 'Grafico De barras',
  backgroundColor: 'rgb(255, 99, 132)',
  borderColor: 'rgb(255, 99, 132)',
  data: [".$dat1.", ".$dat2.", ".$dat3.", ".$dat4.", ".$dat5."]
};

var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: {
    labels: ['".$nam1."', '".$nam2."', '".$nam3."', '".$nam4."', '".$nam5."'],
    datasets: [densityData]
  }
});
    </script>";
  }elseif ($_REQUEST["grafico"] == "torta") {
      $nam1 = $_POST["name1"];
      $nam2 = $_POST["name2"];
      $nam3 = $_POST["name3"];
      $nam4 = $_POST["name4"];
      $nam5 = $_POST["name5"];

      $dat1 = $_POST["dato1"];
      $dat2 = $_POST["dato2"];
      $dat3 = $_POST["dato3"];
      $dat4 = $_POST["dato4"];
      $dat5 = $_POST["dato5"];

      echo "<script>
      var oilCanvas = document.getElementById('oilChart');

var oilData = {
    labels: [
        '".$nam1."',
        '".$nam2."',
        '".$nam3."',
        '".$nam4."',
        '".$nam5."'
    ],
    datasets: [
        {
            label: 'Grafico Circular',
            data: [".$dat1.", ".$dat2.", ".$dat3.", ".$dat4.", ".$dat5."],
            backgroundColor: [
                '#FF6384',
                '#63FF84',
                '#84FF63',
                '#8463FF',
                '#6384FF'
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'pie',
  data: oilData
});
      </script>";
  }elseif ($_REQUEST["grafico"] == "linea") {
      $nam1 = $_POST["name1"];
      $nam2 = $_POST["name2"];
      $nam3 = $_POST["name3"];
      $nam4 = $_POST["name4"];
      $nam5 = $_POST["name5"];

      $dat1 = $_POST["dato1"];
      $dat2 = $_POST["dato2"];
      $dat3 = $_POST["dato3"];
      $dat4 = $_POST["dato4"];
      $dat5 = $_POST["dato5"];
      echo "<script>
      const labels = [
      '".$nam1."',
      '".$nam2."',
      '".$nam3."',
      '".$nam4."',
      '".$nam5."',
      ];

    const data = {
      labels: labels,
      datasets: [{
        label: 'Grafico De Lineas',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [".$dat1.", ".$dat2.", ".$dat3.", ".$dat4.", ".$dat5."],
      }]
    };

    const config = {
      type: 'line',
      data: data,
      options: {}
    };
    </script>

  <script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>";

  }elseif ($_REQUEST["grafico"] == "radar") {
      $nam1 = $_POST["name1"];
      $nam2 = $_POST["name2"];
      $nam3 = $_POST["name3"];
      $nam4 = $_POST["name4"];
      $nam5 = $_POST["name5"];

      $dat1 = $_POST["dato1"];
      $dat2 = $_POST["dato2"];
      $dat3 = $_POST["dato3"];
      $dat4 = $_POST["dato4"];
      $dat5 = $_POST["dato5"];

      echo "<script>
        var marksCanvas = document.getElementById('marksChart');

var marksData = {
  labels: ['".$nam1."', '".$nam2."', '".$nam3."', '".$nam4."', '".$nam5."'],
  datasets: [{
    label: 'Grafico De Radar',
    backgroundColor: 'rgba(200,0,0,0.2)',
    data: [".$dat1.", ".$dat2.", ".$dat3.", ".$dat4.", ".$dat5."]
  }]
};

var radarChart = new Chart(marksCanvas, {
  type: 'radar',
  data: marksData
});
      </script>";

  }elseif ($_REQUEST["grafico"] == "polar"){
      $nam1 = $_POST["name1"];
      $nam2 = $_POST["name2"];
      $nam3 = $_POST["name3"];
      $nam4 = $_POST["name4"];
      $nam5 = $_POST["name5"];

      $dat1 = $_POST["dato1"];
      $dat2 = $_POST["dato2"];
      $dat3 = $_POST["dato3"];
      $dat4 = $_POST["dato4"];
      $dat5 = $_POST["dato5"];

    echo "<script>
      var birdsCanvas = document.getElementById('birdsChart');

  var birdsData = {
  labels: ['".$nam1."','".$nam2."','".$nam3."','".$nam4."','".$nam5."'],
  datasets: [{
    data: [".$dat1.", ".$dat2.", ".$dat3.", ".$dat4.", ".$dat5."],
    backgroundColor: [
      'rgba(255, 0, 0, 0.5)',
      'rgba(100, 255, 0, 0.5)',
      'rgba(200, 50, 255, 0.5)',
      'rgba(0, 100, 255, 0.5)'
    ]
  }]
};

var polarAreaChart = new Chart(birdsCanvas, {
  type: 'polarArea',
  data: birdsData
});
    </script>";
  }



}

?>
</body>
</html>
