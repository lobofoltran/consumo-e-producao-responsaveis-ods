/*
 * Função criada por bootstrap, todos direitos reservados.
 *
*/

(function () {
    'use strict'
    feather.replace({ 'aria-hidden': 'true' })
    var ctx = document.getElementById('myChart')
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          'Domingo',
          'Segunda',
          'Terça',
          'Quarta',
          'Quinta',
          'Sexta',
          'Sábado'
        ],
        datasets: [{
          data: [
            0,
            0,
            0,
            0,
            0,
            0,
            0
          ],
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
          display: false
        }
      }
    })
  })()
