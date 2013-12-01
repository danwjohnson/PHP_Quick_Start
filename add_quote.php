<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Add A Quotation</title>
</head>
<body>

<?php	// Script 11.1 - add_quote.php

	/* This script displays and handles an HTML form.  This script takes text input
	 * and stores it in a text file. */
	 
	// Identify the file to use:
	$file = '../quotes.txt';
	
	// Check for a form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {		// Handle the form
		
		if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.') ) { // Need something to write
			
			if (file_exists($file)) {
			
				if (is_writable($file)) {		// Confirm that the file is writable.
					
					file_put_contents($file, $_POST['quote'].',', FILE_APPEND | LOCK_EX);
					file_put_contents($file, $_POST['author'] . PHP_EOL, FILE_APPEND | LOCK_EX );
					// Write the data
					
					// Print a message:
					print '<p>Your quotation has been stored.</p>';
					
				} else {	// Could not open the file.
					
					print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
					
				} // end of if/else to check if the file is writable
			
			}	// end of check to see if file exists
		
		} else {	// Failed to enter a quotation.
			
			print '<p style="color: red;">Please enter a quotation!</p>';
			
		} // end of if/else to check if data was entered into the form
		
	}	// end of if to check if form was submitted
	
// Leave PHP and display the form:

?>

<form action="add_quote.php" method="post">
	<textarea name="quote" rows="5" cols="30"><?php if (isset($_POST['quote'])) {
	print htmlspecialchars($_POST['quote']);} else { print 'Enter your quote here';} ?></textarea><br />
	<p>Author: <input type="text" name="author" size="20" /></p>
	<input type="submit" name="submit" value="Add This Quote!" />
</form>

</body>

</html>

