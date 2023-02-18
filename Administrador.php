<!DOCTYPE html>
<html lang="es">
<?php

$etiquetas = ["Septiembre", "Octubre", "Noviembre", "Diciembre"];
$datosVentas = [3500, 4000, 7000, 2139];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas con chart.js y PHP | By Parzibyte</title>
   
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
</head>

<body>
    <h1 align="center" >Ventas del mes </h1>
    <canvas id="grafica"></canvas>
    <script type="text/javascript">
  
const $grafica = document.querySelector("#grafica");

const etiquetas = ["Septiembre", "Octubre", "Noviembre", "Diciembre"];

const datosVentas2020 = {
    label: "Ventas por mes - 2020",
    data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const datosVentas2021 = {
    label: "Ventas por mes - 2021",
    data: [10000, 1700, 5000, 5989], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
};

new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            datosVentas2021,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});

    </script>
</body>

</html>