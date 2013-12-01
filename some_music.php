<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Some Of My CDs</title>
</head>

<body>

<h1>CD Listing</h1>

<?php	// Script - Chapter 7 Pursue - Multi-Dimensional arrays

/* This script creates and prints out a multidimensional array. */

// Address error management if you want.

// Create the first array:
$norah = array(1 => 'Good Morning', 'Say Goodbye',
		'Little Broken Hearts', 'She is 22',
		'Take it Back', 'After the Fall',
		'4 Broken Hearts', 'Travelin On', 
		'Out on the Road', ' Happy Pills',
		'Miriam', 'All A Dream');

$rem = array(1 => 'Radio Song', 'Losing My Religion',
		'Low', 'New Wild Heaven', 'Endgame',
		'Shiny Happy People', 'Belong' ,'Half A World Away',
		'Texarkana', 'Country Feedback', 'Me In Honey');

$ted = array(1 => 'Cat Scratch Fever', 'Just What The Doctor Ordered',
		'Free For All', 'Dog Eat Dog', 'Motor City Madhouse',
		'Paralyzed', 'Stranglehold', 'Baby Please Dont Go',
		'Wango Tango', 'Wang Dang Sweet Poontang');

// Create the multidimensional array
$music = array(
		'Norah Jones' => $norah,
		'REM' => $rem,
		'Ted Nugent' => $ted);

// Print out some values:
print "<p>The first song of the Norah Jones CD is <i>{$music['Norah Jones'][1]}</i>.</p>";
print "<p>The second song of the REM CD is <i>{$music['REM'][2]}</i>.</p>";
print "<p>The third song of the Ted Nugent CD is <i>{$music['Ted Nugent'][3]}</i>.</p>";

echo '<pre>';
print_r($music);
echo '</pre>';


?>
</body>

</html>