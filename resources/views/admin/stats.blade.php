@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center" >Statistiche Attività</h1>
    <hr>
    <h2 class="mt-3 fs-1">Grafico Incassi</h2>
    <canvas id="myChart"></canvas>
    <canvas id="lineChart"></canvas>
    <h2 class="mt-3 fs-1">Grafico Ordini</h2>
    <canvas id="orders-chart" width="800" height="400"></canvas>
    <canvas id="lineOrder"></canvas>
</div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($totalLabels) !!},
            datasets: [{
                label: 'Totale Incassi €',
                data: {!! json_encode($totalData) !!},
                backgroundColor: 'rgba(54, 362, 35, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctx = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($totalLabels) !!},
            datasets: [{
                label: 'Totale Incassi €',
                data: {!! json_encode($totalData) !!},
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


    var ctx = document.getElementById('orders-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($countLabels) !!},
            datasets: [{
                label: 'Totale Ordini',
                data: {!! json_encode($countData) !!},
                backgroundColor: 'rgba(54, 62, 325, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById('lineOrder').getContext('2d');
    var lineOrder = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($totalLabels) !!},
            datasets: [{
                label: 'Totale Ordini',
                data: {!! json_encode($totalData) !!},
                fill: true,
                borderColor: 'rgb(54, 62, 325)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection