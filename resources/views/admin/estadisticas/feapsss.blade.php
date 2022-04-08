@extends('welcome')

@section('title', 'ANEXO XXV. Formato de evaluación de las actividades por el prestador de Servicio Social')

@section('content')
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio1_5}}],
          ['Notable',   {{$criterio1_4}}],
          ['Bueno',     {{$criterio1_3}}],
          ['Suficiente', {{$criterio1_2}}],
          ['Insuficiente', {{$criterio1_1}}]
        ]);

        var options = {
          title: '¿Consideras importante la realización del Servicio Social? ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_1'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio2_5}}],
          ['Notable',   {{$criterio2_4}}],
          ['Bueno',     {{$criterio2_3}}],
          ['Suficiente', {{$criterio2_2}}],
          ['Insuficiente', {{$criterio2_1}}]
        ]);

        var options = {
          title: '¿Consideras que las actividades que realizaste son pertinentes a los fines del Servicio Social?',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_2'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio3_5}}],
          ['Notable',   {{$criterio3_4}}],
          ['Bueno',     {{$criterio3_3}}],
          ['Suficiente', {{$criterio3_2}}],
          ['Insuficiente', {{$criterio3_1}}]
        ]);

        var options = {
          title: '¿Consideras que las actividades que realizaste contribuyen a tu formación integral?',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_3'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio4_5}}],
          ['Notable',   {{$criterio4_4}}],
          ['Bueno',     {{$criterio4_3}}],
          ['Suficiente', {{$criterio4_2}}],
          ['Insuficiente', {{$criterio4_1}}]
        ]);

        var options = {
          title: '¿Contribuiste en actividades de beneficio social comunitario?',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_4'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio5_5}}],
          ['Notable',   {{$criterio5_4}}],
          ['Bueno',     {{$criterio5_3}}],
          ['Suficiente', {{$criterio5_2}}],
          ['Insuficiente', {{$criterio5_1}}]
        ]);

        var options = {
          title: '¿Contribuiste en actividades de protección al medio ambiente?',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_5'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio6_5}}],
          ['Notable',   {{$criterio6_4}}],
          ['Bueno',     {{$criterio6_3}}],
          ['Suficiente', {{$criterio6_2}}],
          ['Insuficiente', {{$criterio6_1}}]
        ]);

        var options = {
          title: '¿Cómo consideras que las competencias que adquiriste en la escuela contribuyeron a atender asertivamente las actividades de servicio social?',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_6'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio7_5}}],
          ['Notable',   {{$criterio7_4}}],
          ['Bueno',     {{$criterio7_3}}],
          ['Suficiente', {{$criterio7_2}}],
          ['Insuficiente', {{$criterio7_1}}]
        ]);

        var options = {
          title: '¿Consideras que sería factible continuar con este proyecto de Servicio Social a un proyecto de Residencias Profesionales, proyecto integrador, proyecto de investigación o desarrollo tecnológico? ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_7'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Criterio', 'Aceptación'],
          ['Excelente', {{$criterio8_5}}],
          ['Notable',   {{$criterio8_4}}],
          ['Bueno',     {{$criterio8_3}}],
          ['Suficiente', {{$criterio8_2}}],
          ['Insuficiente', {{$criterio8_1}}]
        ]);

        var options = {
          title: '¿Recomendarías a otro estudiante realizar su Servicio Social en la dependencia donde lo realizaste?',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_8'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_1"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_2"></div>
      </div>
    </div>
  </div>
  </div>

  <div class="row" style="padding-top: 30px;">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_3"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_4"></div>
      </div>
    </div>
  </div>
  </div>

  <div class="row" style="padding-top: 30px;">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_5"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_6"></div>
      </div>
    </div>
  </div>
  </div>

  <div class="row" style="padding-top: 30px;">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_7"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div id="criterio_8"></div>
      </div>
    </div>
  </div>
  </div>

  </body>
</html>

@endsection

