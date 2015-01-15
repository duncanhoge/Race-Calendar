<?php 

include('config.php');

/**This file connects to the database.**/

/** Exceptions 
try tries the code, if it doesn't work
it is caught with the catch command.
it is a good practice to do this with all.
**/
try {
		//$db = new PDO("mysql:host=localhost;dbname=bullcit1_racecal;port=8889","root","root");
	$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
	/** TROUBLESHOOTING: var_dump($db); **/
	/** PDO::method(); PDO is the object, method() is the method**/
	/** The line below throws and error when there's an error in the query**/
	$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db -> exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}
echo "successs!";

?>