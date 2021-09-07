@extends('fixos.master')
@section('titulo','WinTech - Apuração')
@section('principal','nav-link')
@section('apuracao','nav-link active')
@section('contato','nav-link')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Apuração</h1>
</div>
<!-- Grafico
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
-->
<h2>Classificação Final</h2>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">POSIÇÃO</th>
                <th scope="col">AGREMIAÇÃO</th>
                <th scope="col">PONTUAÇÃO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Águia de Ouro</td>
                <td>269,9</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mancha Verde</td>
              <td>269,8</td>
            </tr>
<tr>
  <td>3</td>
  <td>Mocidade Alegre</td>
  <td>269,7</td>
</tr>
<tr>
  <td>4</td>
  <td>Acadêmicos do Tatuapé</td>
  <td>269,7</td>
</tr>

5
Unidos de Vila Maria
269,5

6
Dragões da Real
269,5

7
Rosas de Ouro
269,5

8
Tom Maior
269,3

9
Império de Casa Verde
269,2

10
Barroca Zona Sul
269

11
Gaviões da Fiel
268,9

12
Colorado do Brás
268,7

13
X-9 Paulistana
268,4

14
Pérola Negra
267,6

</tbody>
    </table>
</div>

<!-- Gráficos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
@endsection