@extends('welcome')

@section('title', 'ANEXO XXIII. Formato de evaluación cualitativa del prestador de Servicio Social.')

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
          title: 'Cumple en tiempo y forma con las  actividades encomendadas  alcanzando los objetivos.',
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
          title: 'Trabaja en equipo y se adapta a nuevas situaciones.',
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
          title: 'Muestra liderazgo en las actividades encomendadas.',
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
          title: 'Organiza su tiempo y trabaja de manera proactiva.',
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
          title: 'Interpreta  la  realidad  y  se sensibiliza aportando soluciones a la problemática con la actividad complementaria.',
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
          title: 'Realiza sugerencias innovadoras para beneficio o mejora del programa en el que participa.',
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
          title: 'Tiene iniciativa para ayudar en las actividades encomendadas y muestra espíritu de servicio.',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('criterio_7'));
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

  <div class="row col-sm-12" style="padding-top: 30px;">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <div id="criterio_7"></div>
      </div>
    </div>
  </div>
  </div>


  </body>
</html>

@endsection

