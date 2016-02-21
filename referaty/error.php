<?php

// @@@ main error function that handles some mainly manually raised errors
function error_handler($error_number = 0)
{
	// print error code and die with honour
	echo($error_number); die($error_number);
}

?>