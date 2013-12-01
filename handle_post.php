<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Forum Posting</title>
</head>
<body>

<?php	// Script 5.2 - handle_post.php
/* This script receives five values for posting.html:
 * first_name, last_name, email, posting, submit
 */

// Address error management if you want.

// Get the values from the $_POST array.
// Strip away extra spaces using trim():
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = $_POST['email'];
$posting = trim($_POST['posting']);

// Create a full name variable
$name = $first_name . ' ' . $last_name;

// Get a word count
$words = str_word_count( $posting );

// Take out the bad words:
$posting = str_ireplace('badword', XXXXX, $posting);
$posting = str_ireplace('badword1', XXXXX, $posting);
$posting = str_ireplace('badword2', XXXXX, $posting);
$posting = str_ireplace('badword3', XXXXX, $posting);

// Print a message:
print "<div>Thank you, $name, for your posting: <p>$posting</p><p>($words words)</p></div>";

print '<div>Thank you ' . $name . ' for your posting: <p> '. $posting . '</p><p>('.$words.' words)</p></div>';

// Make a link to another page (From chapter 5, commented out for future tutorials
$name = urlencode($name);
$email = urlencode($_POST['email']);
print "<p>Click <a href=\"thanks.php?name=$name&email=$email\"> here</a> to continue.</p>";

?>

</body>
</html>
