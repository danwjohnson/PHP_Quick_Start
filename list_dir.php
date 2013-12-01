<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Directory Contents</title>
</head>
<body>

<?php		// Script 11.5 - list_dir.php

/* This script lists the directories and files in a directory */

// Set up the timezone
date_default_timezone_set('America/Chicago');

// Set the directory name and scan it:
$search_dir = '.';
$contents = scandir($search_dir);

// List the directories first...
// Print a caption and start a list:
print '<h2>Directories</h2>
<ul>';
foreach ($contents as $item) {
	
	if ((is_dir($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.' ) ) {
		
		print "<li>$item</li>\n";
		
	} // end of if to search for directories first
	
} // end of foreach to loop through the directory

print '</ul>';	// Close the list

// Create the table header:
print '<hr /><h2>Files</h2>
<table cellpadding="2" cellspacing="2" align="left">
<tr>
<td>Name</td>
<td>Size</td>
<td>Last Modified</td>
</tr>';

// List the files:
foreach ($contents as $item) {
	
	if ( (is_file($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.') ){
		
		// Get the file size
		$fs = filesize($search_dir . '/' . $item);
		
		// Get the modification date
		$lm = date('F j, Y', filemtime($search_dir . '/' . $item));
		
		// Print the information
		print "<tr>
		<td>$item</td>
		<td>$fs bytes</td>
		<td>$lm</td>
		</tr>\n";
		
	} // end of if to get and print the files in the directory
	
} // end of foreach loop to list the files

print '</table>';		// Close the HTML table

?>

</body>

</html>
