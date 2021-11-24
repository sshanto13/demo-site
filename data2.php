<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","chart");

$sqlQuery = "SELECT total_sales FROM daily_sales ORDER BY sales_id";

$result = mysqli_query($conn, $sqlQuery);

$data = array();
// chatjs data format
/*
foreach ($result as $row) {
	$data[] = $row;
}
*/
foreach ($result as $row) {
	$data[] = (int)$row['total_sales'];
}
//var_dump
mysqli_close($conn);

echo json_encode($data);
?>