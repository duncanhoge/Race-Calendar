<?php

	// these two constants are used to creat root-relative web addresses
	// and absolute server paths throughout all the code

	define("BASE_URL","/");
	define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/");

	// these are used to connect to the server
	// change them when uploaded to match server credentials

	define("DB_HOST","localhost");
	define("DB_NAME","bullcit1_racecal");
	define("DB_PORT","8889"); // default: 3306
	define("DB_USER","root");
	define("DB_PASS","root");

?>