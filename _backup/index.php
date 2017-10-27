<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:bclouds.database.windows.net,1433; Database = testapp", "budnieswski", "Xrm00hcd!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Try<br>";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "budnieswski@bclouds", "pwd" => "Xrm00hcd!", "Database" => "testapp", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:bclouds.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

die();



$myServer = "bclouds.database.windows.net";
$myUser = "root";
$myPass = "pass";
$myDB = "testdb";

$dbhandle = mssql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer");

die();

if (isset($_GET['cars'])) {
	header("Content-Type: application/json");
	die( file_get_contents(dirname(__FILE__).'/json/carros.json') );
} else {
	echo "Cloud Computing";
}
