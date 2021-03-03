<?php
// &tl;?php


// require('config.php');


// $sql = "SELECT * FROM log";
// $result = $mysqli->query($sql);


// while($row = $result->fetch_array(MYSQLI_ASSOC)){
//   $data[] = $row;
// }



$db = new SQLite3('../db/workout.db');


$sql = "SELECT * FROM log";
$res = $db->query($sql);

while ($row = $res->fetchArray()) {
	// var_dump($row);
	// $date=date_create($row['date']);
	// $date=date_format($date,"m/d/Y");
	$data[] = $row;	
}

$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);

 
?>