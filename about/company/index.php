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
		<h1>Company Expertise</h1>
		<h4>The Guerra Technologies staff commands a wide variety of skills, including:</h4>
		<div class="row">
			<div class="col-sm-6">
				<ul>
					<li>Mixed Signal design (board level or ASIC)</li>
					<li>System engineering</li>
					<li>Filter design and development</li>
					<li>Antenna design</li>
					<li>System design, engineering, and integration</li>
					<li>Reliability and failure analysis</li>
					<li>Cost reduction and yield enhancement</li>
					<li>Prototype engineering and verification</li>
					<li>Mechanical and package design, including EMI/EMC constraints</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<ul>
					<li>Bi-CMOS, CMOS, and RF ASIC design</li>
					<li>Test fixture design, development, and manufacturing</li>
					<li>Mixed signal circuit design</li>
					<li>DC to 38 GHz designs</li>
					<li>RF narrow band and spread spectrum</li>
					<li>Microprocessor software, firmware, and real-time O/S Gate Array design and development</li>
					<li>Component procurement and engineering</li>
					<li>Compliance engineering</li>
					<li>Turnkey board development</li>
				</ul>
			</div>
		</div>
		
		<div class="row">
			<div class="featured">
				<div class="row">
					<div class="col-sm-4 col-sm-push-8">
						<img class="media-object" src="/_resources/images/products/low-noise-amplifiers.png" alt="...">
					</div>
					<div class="col-sm-8 col-sm-pull-4">
						<h3>Low Phase Noise Quadrature Demod</h3>
						<p>This high dynamic range, low phase noise quadrature demod for a 128 QAM Gigabit Ethernet wireless network was designed by Guerra Technologies.</p>
					</div>
					
				</div>
			</div>				
		</div>

		<p class="text-center">For more information, please <a href="/contact">contact us!</a></p>
	</div>

	<?php
		echo $GLOBAL_FOOTER;
		echo $GLOBAL_SCRIPTS;
	?>
</body>
</html>