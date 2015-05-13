<!DOCTYPE html>
<html>
<head>
	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/_resources/php/global-functions.php');
		echo $GLOBAL_HEAD;
	?>
</head>

<body>
	<?php
		echo $GLOBAL_NAV;
		echo $GLOBAL_SUBNAV;
	?>

	<div class="container">
		<h1>Management Team</h1>

	</div>

	<?php 
		include($root.'/_resources/partials/footer.html');
		include($root.'/_resources/partials/scripts.html');
	?>
</body>
</html>