<?php
include_once("db_connect.php");
$sql = "SELECT id as Id, name as name, phone as phone,  clearance_Id as clearance_Id, password as password,  status as status , date as date  FROM agent_table LIMIT 2000";
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
