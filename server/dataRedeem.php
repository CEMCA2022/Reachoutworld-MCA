<?php
include_once("db_connect.php");
$sql = "SELECT id as Id, name as name, phone as phone, size as size, redeem_quantity as redeem_quantity, amount as amount, redeem_code as redeem_code,  agent_name as agent_name, redeem_date as redeem_date FROM redemption_table LIMIT 2000";
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
