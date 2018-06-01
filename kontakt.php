<!DOCTYPE html>
<html>
<head>
	<title>Kontakt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php require 'heading.php';?>

<div class="grid-container">
	<div class="second">
		<h2>Kontaktirajte nas:</h2>
		<form action="" method="POST">
			<label>Unesite vaše ime:</label><br>
			<input style="border: solid steelblue 1px" type="text" name="name" placeholder=" Ime"><br><br>
			<label>Unesite vaš broj telefona:</label><br>
			<input style="border: solid steelblue 1px" type="text" name="tel" placeholder=" Primjer: 123456789"><br><br>
			<label>Napišite nam poruku:</label><br>
			<textarea style="border: solid steelblue 1px" name="message"></textarea>
			<input style="background-color: steelblue; color: white; font-weight: bold; padding: 4px;" type="submit" name="submit" value="Pošalji">
		</form>
		<?php require 'mail.php';?>
	</div>
	<div class="second">
		
	</div>
</div>


<?php require 'footer.php';?>
<script src="script.js"></script>
</body>
</html>