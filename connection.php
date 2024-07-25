<?php 

$serverName="NICO";
$database ="vecfer";
$uid= "dutan";
$pass = "";

$connection = [
"Database" => $database,
"Uid" => $uid,
"PWD" => $pass
];

$conn =sqlsrv_connect($serverName,$connection);
if(!$conn)
	die(print_r(sqlsrv_errors(),true));
	else
$tsql="select * from date";
$stmt = sqlsrv_query($conn,$tsql);

if($stmt == false){
    echo 'Error';
}
	
while($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){

echo $obj['password']. '<br>';
}
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

?>