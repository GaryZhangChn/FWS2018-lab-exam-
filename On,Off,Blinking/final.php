<!DOCTYPE html>

<html>
	<head>
		<title>LED controller</title>
	</head>

	<body>
		<h1>This is a LED controller</h1>
		<?php
		$myled=htmlspecialchars($_POST["led"]);
		
		if($myled=="on") 
		{
			exec('sudo python3 /var/www/html/led3/led.py on');
			echo "<div>$output </div>";
			echo 'LED is on';
			echo "<div>$led</div>";
		}
			
		elseif($myled=="off") {
			exec('sudo python3 led.py off');
			echo 'LED is off';
		}
			
		elseif($myled=="blink") {
			exec('sudo python led_pwm.py >/dev/null &');
			echo 'LED is blinking';
		}
		//echo "<div>$output</div>";
		?>
	</body>
</html>