<?php	// Script 9.1 - customize.php - 9.3

// Handle the form if it has been submitted:
if (isset($_POST['font_size'], $_POST['font_color'])) {
	
	// Send the cookies:
	setcookie('font_size', $_POST['font_size'], time()+10000000, '/', '', 0);
	setcookie('font_color', $_POST['font_color'], time()+10000000, '/', '', 0);
	
	// Message to be printed later:
	// $msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a> to see them in action.</p>';
	$msg ='<p>Your settings have been entered!</p>';
	
} // end of submitted if
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Customize Your Settings</title>
<style type="text/css">
	
	h3 { font_size: medium;
		   font_color: #000;
		 }
	
	body {

<?php // If the settings were set, change the css

	if (isset($_POST['font_size'])) {
		
		print "\t\tfont-size: " . htmlentities($_POST['font_size']) . ";\n";
		
	} else {
		
			print "\t\tfont-size: medium;";		
	}
	
	
	if (isset($_POST['font_color'])) {
		
		print "\t\tcolor: #" . htmlentities($_POST['font_color']) . ";\n";
		
	} else {
		
			print "\t\tcolor: #000;";
	}
	

?>

 }
 
</style>


</head>

<body>

<p style="font-size: medium; color: #000;">Use this form to set your preferences:</p>

<form action="customize.php" method="post">

	<select name="font_size">
		<option value="<?php  if (isset($_POST['font_size'])) { print htmlspecialchars($_POST['font_size']); }?>"
		><?php  if (isset($_POST['font_size'])) { print htmlspecialchars($_POST['font_size']); } else{ print 'Font Size';}?></option>
		<option value="xx-small">xx-small</option>
		<option value="x-small">x-small</option>
		<option value="small">small</option>
		<option value="medium">medium</option>
		<option value="large">large</option>
		<option value="x-large">x-large</option>
		<option value="xx-large">xx-large</option>
	</select>
	
	<select name="font_color">
		<option value="<?php if (isset($_POST['font_color'])) { print htmlspecialchars($_POST['font_color']); }?>"><?php
    	if (isset($_POST['font_color'])) {
        if ($_POST['font_color']=="999") {
            print 'Gray';
        } elseif ($_POST['font_color']=="0c0") {
            print 'Green';
        } elseif ($_POST['font_color']=="00f") {
            print 'Blue';
        } elseif ($_POST['font_color']=="c00") {
            print 'Red';
        } elseif ($_POST['font_color']=="000") {
            print 'Black';
        }
    } else {
        print 'Font Color';
    }
?></option>
		<option value="999">Gray</option>
		<option value="0c0">Green</option>
		<option value="00f">Blue</option>
		<option value="c00">Red</option>
		<option value="000">Black</option>
	</select>
	
	<input type="submit" name="submit" value="Set My Preferences" />

</form>

	<p>yadda yadda yadda yadda yadda 
	yadda yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda</p>

</body>

</html>
