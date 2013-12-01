<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Add an Event</title>
</head>

<body>

<?php	// Script 7.9 - event.php
/* This script handles the event form. */

// Address error management if you want.

// Print the text:
print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br />";

// print each weekday
if (isset($_POST['days']) AND
	is_array($_POST['days'])) {
	
	foreach ($_POST['days'] as $day) {
		print "$day<br />\n";
	} // end of for each
	
} else {
	
	print 'Please select at least one weekday for this event!';
	
} // end of if/else conditional

// Complete the paragrpah
print '</p>';

?>

</body>

</html>
