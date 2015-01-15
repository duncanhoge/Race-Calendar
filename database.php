<?php


/** Exceptions 
try tries the code, if it doesn't work
it is caught with the catch command
**/
try {
	$db = new PDO("mysql:host=localhost;dbname=bullcit1_racecal;port=8889","root","root");
	/** TROUBLESHOOTING: var_dump($db); **/
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db -> exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}

try {
	/** sample query: #results = $db->query("SELECT x, y FROM calendar ORDER BY date ASC");**/
	echo "Query was run, stored in Results Variable";
} catch (Exception $e) {
	echo "Query did not run.";
}