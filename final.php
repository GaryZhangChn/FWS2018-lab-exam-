<!DOCTYPE html>
<html>
	<body>
		<h1>This is a LED controller</h1>
		<?php
		$led=htmlspecialchars($_post["LED1"]);
		if ($led=="on")
			`python3 final.py on`;
		else if ($led="off")
			`python3 final.py off`;
		?>
	</body>
</html>