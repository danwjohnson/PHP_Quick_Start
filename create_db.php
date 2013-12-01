<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Create the Database</title>
</head>
<body>

<?php	// Script 12.3 - create_db.php
/* This script connects to the MySQL server. */

// Attempt to connect to MySQL and print out messages:
if ($dbc = @mysql_connect('127.0.0.1', 'phpusr', 'phpusr')) {
	
	print '<p>Successfully connect to MySQL</p>';
	
	// Try to create the database:
	if (@mysql_query('CREATE DATABASE myblog', $dbc)) {
		
		print '<p>The database has been created!</p>';
		
	} else {	// Could not create it
		
		print '<p style="color: red;">Could not create the database because:<br />' . mysql_error() . '.</p>';
		
	} // end of if/else to create the database
	
	mysql_close($dbc);		// Close the connection
	
} else {
	
	print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
	
}

?>

</body>

</html>