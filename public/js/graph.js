/* 
// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['bar']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

function drawChart() 
{

  var options = {
      bars: 'vertical',
      vAxis: {format: 'decimal'},
      colors: ['#1b9e77', '#7570b3']
  };
  // Create the data Table


  //Actual Live test
  var dataTest = new google.visualization.DataTable([
      ['ExamenTest', 'Resultat_Test', 'Normes_Test'],
      ['Alpha', 99, 20],
      ['Beta', 69, 71],
      ['Delta', 10, 50]
  ]);

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.charts.Bar(document.getElementById('chart_div'));
  chart.draw(jsonData, google.charts.Bar.convertOptions(options));
} */