@extends('welcome')

@section('title', 'Estadisticas')

@section('content')
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawTitleSubtitle);

function drawTitleSubtitle() {
      var data = google.visualization.arrayToDataTable([
        ['Género', 'Hombres', 'Mujeres'],
        ['IGE', {{$alumnoshige}}, {{$alumnosmige}}],
        ['IND', {{$alumnoshind}}, {{$alumnosmind}}],
        ['ISC', {{$alumnoshisc}}, {{$alumnosmisc}}],
        ['ADMON', {{$alumnoshla}}, {{$alumnosmla}}],
        ['TSM', {{$alumnoshtsm}}, {{$alumnosmtsm}}],
        ['INF-ED', {{$alumnoshinfs}}, {{$alumnosminfs}}],
        ['IGE-ED', {{$alumnoshiges}}, {{$alumnosmiges}}],
        ['Total', {{$alumnosh}}, {{$alumnosm}}]
      ]);

      var materialOptions = {
        chart: {
          title: 'Estadisticas',
          subtitle: 'Total de Hombres y Mujeres que estan realizando el servicio social'
        },
        hAxis: {
          title: 'Total Hombres y Mujeres',
          minValue: 0,
        },
        vAxis: {
          title: 'Genero'
        },
        bars: 'horizontal'
      };
      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
      materialChart.draw(data, materialOptions);
    }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>

@endsection