<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Forum Posting</title>
</head>
<body>

<?php // Script in the Pursue section of Chapter 5
// This script handles string input from a form and displays it on the screen

// Get the values from the post array. 
$user_name = trim($_POST['user_name']);
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

// Create a full name varible
$name = $first_name . ' ' . $last_name;

// Display the registration message on the screen

print "<div><p>Thank for you for registering for this site.</p></div>";

print "<div><p>We have recorded your information as follows:</p><p>User Name: $user_name<p>First Name: $first_name</p>
<p>Last Name: $last_name</p><p>Full Name: $name</p><p>Address: $address</p><p>City: $city</p><p>State: $state</p></div>";

?>

</body>
</html>
