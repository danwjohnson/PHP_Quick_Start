<?php // Script 8.9 - register.php
/* This page lets people register for the site (in theory). */

// Set the page title and include the header file:
define('TITLE', 'Register');
include('templates/header.html');

// Print some introductory text:
print '<h2>Registration Form</h2><p>Register so that you can take advantage of certain features like this, that, and the other thing.</p>';

// Add the CSS
print '<style type="text/css" 
media="screen">
	.error { color.red; }
</style>';

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$problem = FALSE;		// No problems so far
	
	// Check for each value...
	if (empty($_POST['first_name'])) {
		$problem = TRUE;
		print '<p class="error">Please enter your first name!</p>';
	}

	if (empty($_POST['last_name'])) {
		$problem = TRUE;
		print '<p class="error">Please enter your last name!</p>';
	}
	
	if (empty($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) ) {
		$problem = TRUE;
		print '<p class="error">Please enter your email address!</p>';
	} 
	
	if (empty($_POST['password1'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a password!</p>';
	} else {
	
		if ($_POST['password1'] != $_POST['password2']) {
			
			$problem = TRUE;
			print '<p class="error">Your password did not match your confirmed password!</p>';
			
		}
		
	}
	if (!$problem) {	// If there weren't any problems..
		
		// Print a message:
		print '<p>You are now registered!<br />You now get to enjoy all the benefits this fan club has to offer.</p>';
		
		//Send the email:
		$body = "Thank you for registering with the J.D. Salinger fan club!  Your password is '{$_POST['password1']}'.";
		mail($_POST['email'], 'Registration Confirmation', $body, 'From: catcher@jdrocks.com');
		
		// Clear the posted values:
		$_POST = array();
		
	} else {	// forgot a field
		
		print '<p class="error">Please try again!</p>';
		
	} // end of else
		
} // End of handle form IF.
?>

<form action="register.php" method="post">

	<p>First Name: <input type="text" name="first_name" size="20"
	value="<?php if (isset($_POST['first_name'])) {print htmlspecialchars($_POST['first_name']); }?>" /></p>
	
	<p>Last Name: <input type="text" name="last_name" size="20"
	value="<?php if (isset($_POST['last_name'])) {print htmlspecialchars($_POST['last_name']); }?>" /></p>
	
	<p>Email Address: <input type="text" name="email" size="20"
	value="<?php if (isset($_POST['email'])) {print htmlspecialchars($_POST['email']); }?>" /></p>
	
	<p>Password: <input type="password" name="password1" size="20"
	value="<?php if (isset($_POST['password1'])) {print htmlspecialchars($_POST['password1']); }?>" /></p>
	
	<p>Confirm Password: <input type="password" name="password2" size="20"
	value="<?php if (isset($_POST['password2'])) {print htmlspecialchars($_POST['password2']); }?>" /></p>
	
	<p><input type="submit" name="submit" value="Register!" /></p>
	

</form>

<?php include('templates/footer.html'); // Need the footer?>