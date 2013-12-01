<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sticky Text Inputs</title>
</head>
<body>

<?php	// Script 10.2 & 10.3 - sticky1.php & sticky2.php

	/* This script defines and calls a function that creates a sticky text input. */

	// This function makes a sticky text input.
	// This function requires two arguments to be passed to it.
	
	function make_text_input($name, $label, $size = 20) {
		
		// Begin a paragraph and a label
		print '<p><label>' . $label . ': ';
		
		// Begin the input; check if the field is a password field or not
		if ($name='password') {
			
			print '<input type="password" name="' . $name . '" size="' . $size . '" ';
			
		} else {

			print '<input type="text" name="' . $name . '" size="' . $size . '" ';
		
		}	
			
		// Add the value:
		if (isset($_POST[$name])) {
			
			print ' value="' . htmlspecialchars($_POST[$name]) . '"';
			
		} elseif (isset($_GET[$name])) {
			
			print ' value"' . htmlspecialchars($_GET[$name]) . '"';
			
		} // end of if statement to check if the variable has been set
		
		// Complete the input, the label and the paragraph:
		print ' /></label></p>';
		
	} // end of make_text_input
	
	// Make the form
	print '<form action="" method="post">';
	
	// Create some text inputs:
	make_text_input('first_name', 'First Name');
	make_text_input('last_name', 'Last Name', 30);
	make_text_input('email', 'Email Address', 50);
	make_text_input('password', 'Password', 20);
	
	print '<input type="submit" name="submit" value="Register!" /></form>';
	

?>

</body>

</html>
