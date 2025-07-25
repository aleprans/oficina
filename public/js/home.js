$(document).ready(function() {
  $('#dashboard').addClass('active')
})

var mes = ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez']

  var ctxArea = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctxArea, {
    type: 'line',
    data: {
      labels: mes,
      datasets: [{
        label: "Horas Trabalhadas",
        lineTension: 0.3,
        backgroundColor: "rgba(78, 115, 223, 0.05)",
        borderColor: "rgba(78, 115, 223, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(50, 80, 223, 1)",
        pointHoverBorderColor: "rgba(50, 80, 223, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 1,
        data: [2, 4, 6,4,5,2,3,4,8,5,3,4],
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: true,
            drawBorder: true
          },
          ticks: {
            maxTicksLimit: 10
          }
        }],
        yAxes: [{
          ticks: {
            maxTicksLimit: 3,
            padding: 10,
            callback: function(value, index, values) {
              return value;
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: true,
            borderDash: [1],
            zeroLineBorderDash: [1]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        intersect: false,
        mode: 'index',
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            return tooltipItem.yLabel;
          }
        }
      }
    }
  });