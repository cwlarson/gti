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
	?>

	<div class="container">
		<h1>Guerra Technologies, Inc.</h1>
		<h3>San Jose, Silicon Valley</h3>
		<h3>RF Consulting, Design, Development, Evaluation, and Manufacturing Services</h3>
		<div class="row">
			<!-- <div class="col-sm-offset-2"></div> -->
			<div class="col-sm-4">
				<ul>
					<li>Mixed-signal ASIC design</li>
					<li>Antenna design</li>
					<li>Systems design, engineering and integration</li>
					<li>Reliability and failure analysis</li>
					<li>Cost reduction and yield management</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li>Prototype engineering and manufacturing</li>
					<li>Design analysis and verification</li>
					<li>Mechanical and package design</li>
					<li>Test fixture design, development, and manufacturing</li>
				</ul>
			</div>
		</div>
	</div>

	<?php
		echo $GLOBAL_FOOTER;
		echo $GLOBAL_SCRIPTS;
	?>
</body>
</html>