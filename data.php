<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","chart");

$sqlQuery = "SELECT views FROM campaign_per_one ORDER BY campain_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
//chartjs data format

/*
foreach ($result as $row) {
	$data[] = $row;
}
*/
foreach ($result as $row) {
	$data[] = (int)$row['views'];
}
mysqli_close($conn);

echo json_encode($data);
?>