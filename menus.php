<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Date Menus</title>
</head>
<body>

<?php	// Script 10.1 - menus.php
/* This script defines and calls a function. */

// This function makes three pull-down menus for the months, days, and years.
function make_date_menus($start_year, $number_of_years = 10) {
	
	// Array to store the months:
	$months = array (1 => 'January', 'February', 'March', 'April' ,'May', 'June', 'July',
						  'August', 'September', 'October', 'November', 'December');
	
	// Make the month pull-down menu:
	print '<select name="month">';
	foreach ($months as $key => $value) {
		
		print "\n<option value=\"$key\">$value</option>";
	
	} // end of for each to build month drop down menu
	print '</select>';
	
	
	// Make the day pull-down menu
	print '<select name="day">';
	for ($day = 1; $day <= 31; $day++) {
		
		print "\n<option value=\"$day\">$day</option>";
		
	} // end of for each to build the day drop down menu
	print '</select>';
	
	
	// Make the year pull-down menu
	print '<select name="year">';
//	$start_year = date('Y');
	for ($y = $start_year; $y <= ($start_year + $number_of_years ); $y++) {
		
		print "\n<option value=\"$y\">$y</option>";
		
	} // end of for each to buld the year drop down menu
	print '</select>';
	
}  // end of make_date_menu function

// Make the form:
print '<form action="" method="post">';
make_date_menus(1971,20);
print '</form>';
?>

</body>

</html>
