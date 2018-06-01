<!DOCTYPE html>
<html>
<head>
	<title>Kontakt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php require 'headingEng.php';?>

<div class="grid-container">
	<div class="second">
		<h2>Contact us:</h2>
		<form action="" method="POST">
			<label>Enter your name:</label><br>
			<input style="border: solid steelblue 1px" type="text" name="name" placeholder=" Name"><br><br>
			<label>Enter your phone number:</label><br>
			<input style="border: solid steelblue 1px" type="text" name="tel" placeholder=" Example: 123456789"><br><br>
			<label>Write us a message:</label><br>
			<textarea style="border: solid steelblue 1px" name="message"></textarea>
			<input style="background-color: steelblue; color: white; font-weight: bold; padding: 4px;" type="submit" name="submit" value="Send">
		</form>
		<?php require 'mailEng.php';?>
	</div>
	<div class="second">
		
	</div>
</div>


<?php require 'footerEng.php';?>
<script src="script.js"></script>
</body>
</html>