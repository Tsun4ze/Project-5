// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {

  // Create the data table.
  var data = new google.visualization.DataTable();
  

  // Set chart options
  var options = {};

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
