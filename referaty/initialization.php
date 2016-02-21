<?php

define('DB_HOST','server');		// database server address
define('DB_LOGIN','login');		// username for loggin into database
define('DB_PASSWORD','password');	// password for loggin into database
define('DB_DATABASE','database');	// name of database to choose



// hack register_globals directive
if (true || ini_get("register_globals"))
{
	foreach ($_POST as $key => $value) if (isset($$key)) unset($$key);
	foreach ($_GET as $key => $value) if (isset($$key)) unset($$key);
	if (isset($_SESSION)) foreach ($_SESSION as $key => $value) if (isset($$key)) unset($$key);
}

// hack automatic magic quotes behaviour
if (true || ini_get("magic_quotes_gpc"))
{
	foreach ($_POST as $key => $value) if (!is_array($value)) $_POST[$key] = stripslashes($value);
	foreach ($_GET as $key => $value) $_GET[$key] = stripslashes($value);
}

?>
