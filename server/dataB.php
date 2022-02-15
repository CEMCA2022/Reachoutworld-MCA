<?php
include_once("db_connect.php");
$sql = "SELECT id as Id, name as name, quantity as quantity, size as size, redeem_quantity as redeem_quantity, phone as phone, address as address, agent_name as agent_name, redeem_code as redeem_code, status as status, register_date as register_date FROM order_table LIMIT 1000";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$data[] = $rows;
}

$results = array(
	"sEcho" => 1,
"iTotalRecords" => count($data),
"iTotalDisplayRecords" => count($data),
  "aaData"=>$data);

echo json_encode($results);

?>
