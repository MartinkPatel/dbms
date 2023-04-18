<?php
 include 'database.php';
 session_start();
 $sql = "SELECT YEAR(date) AS label, COUNT(*) AS y FROM placement GROUP BY YEAR(date)";
$result = $connect3->query($sql);

// Create the data points array
$dataPoints = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $dataPoint = array("y" => $row["y"], "label" => $row["label"]);
        array_push($dataPoints, $dataPoint);
    }
}

// Convert the data points array to JSON format
$json = json_encode($dataPoints);


 ?>

<!DOCTYPE HTML>
<HEAD>
	<TITLE>Companies Visiting</TITLE>
<!--
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

 <script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic()
{
    var t="<?php echo"$yearcount"?>";

    while(t--)
    {

      var data = google.visualization.arrayToDataTable([
        ['Year', 'No. of companies visiting',],
        ['2017-2018', <?php while($row = mysqli_fetch_array($result))
                          { echo $row["number"];} ?>],

      ]);

      var options = {
        // title: 'Population of Largest U.S. Cities',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Total No. of Companies',
          minValue: 0
        },
        vAxis: {
          title: 'Academic Year'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
}
</script> -->
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
  theme: "dark1",
	animationEnabled: true,
	title:{
		text: "Chart Of Visiting Companies by Year"
	},
	axisY: {
    interval: 0.5,
		title: "Number OF Companies",
		includeZero: true,

	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</HEAD>
<BODY>
  
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="canvas.js"></script>

</BODY>
