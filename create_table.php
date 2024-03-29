<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Create a Table</title>
</head>
<body>


<?php	// Script 12.4 - create_table.php
/* This script connects to the MySQL server, selects the database and creates a table. */

// Connect and select:
if ($dbc = @mysql_connect('127.0.0.1', 'phpusr', 'phpusr')) {
	
	// Handle the error if the database couldn't be selected:
	if (!@mysql_select_db('myblog', $dbc)) {
		
		print '<p style="color: red;">Could not select the database because:<br />' .
				mysql_error($dbc) . '.</p>';
		mysql_close($dbc);
		$dbc = FALSE;
		
	} // end of if to select the database
	
} else {	// Connection failure
	
	print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
	
} // end of if/else to connect to mysql and select the database

if ($dbc) {
	
	// Define the query
	$query = 'CREATE TABLE entries (
	entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	entry TEXT NOT NULL,
	date_entered DATETIME NOT NULL)';
	
	// Execute the query
	if (@mysql_query($query, $dbc)) {
		
		print '<p>The table has been created!</p>';
		
	} else {
		
		print '<p style="color: red;">Could not create the table because:<br />' . mysql_error($dbc) . '.</p>
		<p>The query being run was: ' . $query . '</p>';
		
	}	// end of if/else to run the query with error handling
	
	mysql_close($dbc);	// Close the connection.
	
} // end of if to create and execute the query with error handling

?>

</body>

</html>
