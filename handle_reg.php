<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Registration</title>
<style type="text/css" media="screen">.error { color: red }</style>
</head>

<body>

<h1>Registration Results</h1>

<?php // Script 6.2 - handle_reg.php
/* This script receives seven values from register.html:
 * email, password, confirm, year, terms, color, submit
 */

// Address error management, if you want.

// Print out the data in the $_POST array
print_r ($_POST);

// Flag variable to track success:
$okay = TRUE;

// Set current year variable
$current_year = 2012;

// Validate the email address:
if (empty($_POST['email'])) {
	
	print '<p class="error">Please enter your email address.</p>';
	$okay = FALSE;
	
} // end of if to validate email address

// Validate the password
if (empty($_POST['password'])) {
	
	print '<p class="error">Please enter your password.</p>';
	$okay = FALSE;
	
} // end of if to validate the password


// Check the two passwords for equality
if ($_POST['password'] != $_POST['confirm']) {
	
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = FALSE;
	
} // end of if to validate password equals confirmed password


// Validate the birth year
// Commented out to make changes for nested conditionals
//if (is_numeric($_POST['year'])) {
//	
//	$age = 2012 - $_POST['year'];
	// Calculate age this year
//	
//} else {
//	
//	print '<p class="error">Please enter the year you were born as four digits.</p>';
//	$okay = FALSE;
//	
//} // end of if/else to validate the birth year
//
//
// Check that they were born before this year
//if ($_POST['year'] >= 2012) {
//	
//	print '<p class="error">Either you entered your birth year wrong or you come from the future</p>';
//	$okay = FALSE;
//	
//} // end of if to validate year entered is current year or earlier

if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
	
	// Check that they were born before 2012
	if ($_POST['year'] < $current_year) {
		
		$age = $current_year - $_POST['year'];
		// Calculate age this year
		
	} else {
		
		print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
		$okay = FALSE;
		
	} // end of 2nd conditional

} else {	// Else for 1st conditional

	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = FALSE;

} // end of 1st conditional

// Validate the users birthday
$birthday = $_POST['month'] . '/' . $_POST['day'] . '/' . $_POST['year'];

// Validate the terms
if (!isset($_POST['terms'])) {
	
	print '<p class="error">You must accept the terms.</p>';
	
} // end of terms validation conditional


// Validate the color:
// Commented out to change the validation to a switch conditional
//if ($_POST['color'] == 'red' ) {
//	$color_type = 'primary';
//} elseif ($_POST['color'] == 'yellow') {
//	$color_type = 'primary';
//} elseif ($_POST['color'] == 'green' ) {
//	$color_type = 'secondary';
//} else if ($_POST['color'] == 'blue' ) {
//	$color_type = 'primary';
//} else  {	// Problem!
//	print '<p class="error">Please select your favorite color.</p>';
//	$okay = FALSE;
//}

switch ($_POST['color']) {
	case 'red':
		$color_type = 'primary';
		break;
	case 'yellow':
		$color_type = 'primary';
		break;
	case 'green':
		$color_type = 'secondary';
		break;
	case 'blue':
		$color_type = 'primary';
		break;
	default:
		print '<p class="error">Please select your favorite color.</p>';
		$okay = FALSE;
		break;
} // end of switch conditional


// If there were no errors, print a success message:
if ($okay) {
	
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite color is a $color_type color";
	print '<p>Your favorite color is <span style="color:' . $_POST['color']. '">' . $_POST['color'] .'</span>.</p>';
	print '<p>Your birthday is: ' . $birthday .' .';
	
} // end of no errors conditional

?>

</body>

</html>
