<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width"/>
		<title>Gary's final project</title>
	</head>
	<body>
	<center>
		<H1>LED Controller</H1>
		<br />
		<p style="font-family: 'Franklin Gothic Medium', Arial, sans-serif" "fint-size:150%">Turning LED ON and OFF</p>
		
		<form action="final.php" method="post">

		<fieldset>
			<label for="led_on">On</label>
			<input type="radio" name="led" value="on" id="led_on"/><br>

			<label for="led_off">Off</label>
			<input type="radio" name="led" value="off" id="led_off"/><br>

			<label for="led_off">Bling Bling</label>
			<input type="radio" name="led" value="blink" id="led_blink"/><br>
			<input type="submit" value="send instruction"/>
		</fieldset>
		</form>
	</center>
	</body>
</html>