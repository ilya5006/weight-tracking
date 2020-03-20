/*
$dataPoints = array(
	array("y" => 16, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);
 
*/

let graph = new CanvasJS.Chart("graph", {
	title: {
		text: "График веса"
	},
	axisY: {
		title: "Вес"
    },
	data: [{
		type: "line",
		dataPoints: ''// json $dataPoints
	}]
});
graph.render();