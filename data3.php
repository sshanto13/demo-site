<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","chart");

$sqlQuery = "SELECT views FROM campaign_per_two ORDER BY campain_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = (int)$row['views'];
}

//print_r($data);
mysqli_close($conn);

echo json_encode($data);

?>