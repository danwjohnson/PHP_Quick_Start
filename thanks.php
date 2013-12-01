<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Greetings</title>
</head>
<body>
<?php	// Script from Pursue section of chapter 5

ini_set('display_errors', 1);

error_reporting(E_ALL | E_STRICT);

$name = $_GET['name'];
$email = $_GET['email'];

print "<p>Thank you $name for your posting.</p><p>A copy will be send to $email.";

?>
</body>
</html>
