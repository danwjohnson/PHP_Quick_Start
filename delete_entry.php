<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Delete an Entry</title>
</head>
<body>

<?php	// Script 12.8 - delete_entry.php
/* This script deletes a blog entry */

// Connect and select:
$dbc = mysql_connect('127.0.0.1', 'phpusr', 'phpusr');
mysql_select_db('myblog', $dbc);

if (isset($_GET['id']) && is_numeric($_GET['id']) ) {	// Display the entry in a form

	// Define the query
	$query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
	if ($r = mysql_query($query, $dbc)) {	// Run the query
		
		$row = mysql_fetch_array($r);		// Retieve the information
		
		// Make the form
		print '<form action="delete_entry.php" method="post">
		<p>Are you sure you want to delete this entry?</p>
		<p><h3>' . $row['title'] . '</h3>' .
		$row['entry'] . '<br />
		<input type="hidden" name="id" value="' . $_GET['id'] . '" />
		<input type="submit" name="submit" value="Delete this Entry!" /></p>
		</form>';
		
	} else {	// Couldn't get the information
		
		print '<p style="color: red;">Could not retrieve the blog entry because:<br />' .
				mysql_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
		
	} // end of if/else to run the query and format the form
	
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {	// handle the form
	
	// Define the query
	$query = "DELETE FROM entries WHERE entry_id={$_POST['id']} LIMIT 1";
	$r = mysql_query($query, $dbc);		// Execute the query
	
	// Report on the result:
	if (mysql_affected_rows($dbc) == 1) {
		
		print '<p>The blog entry has been deleted.</p>';
		
	} else {
		
		print '<p style="color: red;">Could not delete the blog entry because:<br />' .
				mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		
	} // end of if/else to report the result of the delete query
	
} else {	// No ID received
	
	print '<p style="color: red;">This page has been accessed in error.</p>';
	
} // end of main if statement

mysql_close($dbc);	// Close the connection

?>

</body>

</html>