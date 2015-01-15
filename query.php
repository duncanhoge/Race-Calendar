<?php
include('inc/config.php');
include('inc/database.php');


require(ROOT_PATH . "inc/database.php");

/**QUERY THE SERVER**/

/** Available columns:
	-date
	-name
	-link
	-city
	-state
	-status
**/

try {
	$results = $db->query("SELECT date, name, link, city, state, status FROM calendar ORDER BY date ASC");
	echo "Query was run, stored in Results Variable";
} catch (Exception $e) {
	echo "Query did not run.";
}

/**The line below returns as a PDO statement**/
/**SEE documentation for PDOStatement::fetchAll on PHP.net
-fetchAll is a combination between Associative and Numeric, so it fetches both.
So, we will use FETCH_ASSOC so it doesn't spit out double results.
**/


echo "<pre>";
//TEST LINE:
var_dump($results->fetchAll(PDO::FETCH_ASSOC));
//$listing = $results->fetchAll(PDO::FETCH_ASSOC));
echo "</pre>";

?>