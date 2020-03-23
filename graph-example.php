<?php
 
$dataPoints = array(
	array("y" => 16, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var graph = new CanvasJS.Chart("graph", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
graph.render();
}
</script>
</head>
<body>
<div id="graph" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>