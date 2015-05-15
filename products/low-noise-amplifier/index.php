<!DOCTYPE html>
<html>
<head>
	<?php
		require $_SERVER['DOCUMENT_ROOT'].'/_resources/php/global-functions.php';
		echo $GLOBAL_HEAD;
		
		require 'php/products-functions.php';
	?>
	<link rel="stylesheet" type="text/css" href="/_resources/css/products.css">
</head>

<body>
	<?php
		echo $GLOBAL_NAV;
		echo $GLOBAL_SUBNAV;
	?>

	<div class="container">
		<h1>1575 MHz In-Line GPS LNA</h1>
		<div class="row">
			<div class="col-sm-6">
				<h3>Feautures/Benefits:</h3>
				<ul>
					<li>High dynamic range</li>
					<li>Powered from DC on antenna cable</li>
					<li>Rugged construction</li>
					<li>Small form factor</li>
					<li>Water-resistant</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<img src="/_resources/images/products/low-noise-amplifiers.png">
			</div>

		</div>

		<div class="row">
			<div class="col-xs-12">
				<h3>Specifications:</h3>
				<?php
					createCollapsibleTable([
						0 => [
						  	'Model #' => [
								'value' => 'ILA1575-1',
								'units' => ''
							]
							,'Frequency' => [
						  		'value' => '1575',
						  		'units' => 'MHz'
						  	]
						  	, 'Gain' => [
						  		'value' => '35',
						  		'units' => 'dB, min'
						  	]
						  	, 'Noise Figure' => [
						  		'value' => '3',
						  		'units' => 'dB, max'
						  	]
						  	, 'Output 1 dB Comp Pt.' => [
						  		'value' => '+7',
						  		'units' => 'dBm, min'
						  	]
						  	, 'VSWR In / Out' => [
								'value' => '2.5 / 1.9',
								'units' => 'typical'
						  	]
						  	, 'DC Curr @ 3.3-12 VDC' => [
						  		'value' => '26 @ 4 volts',
						  		'units' => 'mA, typical'
						  	]
						]
						, 1 => [
						  	'Model #' => [
								'value' => 'ILA1575-2',
								'units' => ''
							]
							,'Frequency' => [
						  	  	'value' => '1575',
						  	  	'units' => 'MHz'
						  	]
						  	, 'Gain' => [
						  		'value' => '24',
						  		'units' => 'dB, min'
						  	]
						  	, 'Noise Figure' => [
						  		'value' => '3',
						  		'units' => 'dB, max'
						  	]
						  	, 'Output 1 dB Comp Pt.' => [
						  		'value' => '+7',
						  		'units' => 'dBm, min'
						  	]
						  	, 'VSWR In / Out' => [
						  		'value' => '2.5 / 1.9',
						  		'units' => 'typical'
						  	]
						  	, 'DC Curr @ 3.3-12 VDC' => [
						  		'value' => '26 @ 4 volts',
						  		'units' => 'mA, typical'
						  	]
						]
						, 2 => [
						  	'Model #' => [
								'value' => 'ILA1575-3',
								'units' => ''
							]
							,'Frequency' => [
						  		'value' => '1575',
						  		'units' => 'MHz'
						  	]
						  	, 'Gain' => [
						  		'value' => '16',
						  		'units' => 'dB, min'
						  	]
						  	, 'Noise Figure' => [
						  		'value' => '2',
						  		'units' => 'dB, max'
						  	]
						  	, 'Output 1 dB Comp Pt.' => [
						  		'value' => '+10',
						  		'units' => 'dBm, min'
						  	]
						  	, 'VSWR In / Out' => [
						  		'value' => '3.0 / 3.0',
						  		'units' => 'typical'
						  	]
						  	, 'DC Curr @ 3.3-12 VDC' => [
						  		'value' => '26 @ 4 volts',
						  		'units' => 'mA, typical'
						  	]
						]
					]);
				?>
				<ul>
				    <li>The input connector is identified with black mounting hardware.</li>
				    <li>Maximum RF input without damage is +17 dBm.</li>
				    <li>Reverse Isolation > 30 dB.</li>
				</ul>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<h3>Physical Dimensions</h3>
				<?php
					createCollapsibleTable([
						0 => [
						  	'Model #' => [
								'value' => 'ILA1575-1',
								'units' => ''
							]
							,'Length' => [
						  	  	'value' => '2.35"',
						  	  	'units' => ''
						  	  ]
						  	, 'Width' => [
						  		'value' => '0.80"',
						  		'units' => ''
						  	]
						  	, 'Body Length' => [
						  		'value' => '1.60"',
						  		'units' => ''
						  	]
						  	, 'Depth' => [
						  		'value' => '0.30"',
						  		'units' => ''
						  	]
						]
						, 1 => [
						  	'Model #' => [
								'value' => 'ILA1575-2',
								'units' => ''
							]
							,'Length' => [
						  		'value' => '2.35"',
						  		'units' => ''
						  	]
						  	, 'Width' => [
						  		'value' => '0.80"',
						  		'units' => ''
						  	]
						  	, 'Body Length' => [
						  		'value' => '1.60"',
						  		'units' => ''
						  	]
						  	, 'Depth' => [
						  		'value' => '0.30"',
						  		'units' => ''
						  	]
						]
						, 2 => [
						  	'Model #' => [
								'value' => 'ILA1575-3',
								'units' => ''
							]
							,'Length' => [
						  		'value' => '3.00"',
						  		'units' => ''
						  	]
						  	, 'Width' => [
						  		'value' => '0.80"',
						  		'units' => ''
						  	]
						  	, 'Body Length' => [
						  		'value' => '1.54"',
						  		'units' => ''
						  	]
						  	, 'Depth' => [
						  		'value' => '0.70"',
						  		'units' => ''
						  	]
						]
					]);
				?>
			</div>
		</div>
				
		<div class="row">
			<div class="col-xs-12">
				<h3>Environmental Characteristics</h3>
				<ul>
					<li>Operating Temperature: Industrial</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<h3>Pricing &amp; Delivery</h3>
				<?php
					createCollapsibleTable([
						0 => [
							'Model #' => [
								'value' => 'ILA1575-1',
								'units' => ''
							]
							,'Unit Price' => [
								'value' => '$260.00',
								'units' => ''
							]
							, 'Purchase' => [
								'value' => '<img class="paypal-logo" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="Buy now with PayPal" />',
								'units' => ''
							]
							, 'Delivery Time' => [
								'value' => 'Two weeks',
								'units' => ''
							]
						]
						, 1 => [
							'Model #' => [
								'value' => 'ILA1575-2',
								'units' => ''
							]
							,'Unit Price' => [
								'value' => '$260.00',
								'units' => ''
							]
							, 'Purchase' => [
								'value' => '<img class="paypal-logo" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="Buy now with PayPal" />',
								'units' => ''
							]
							, 'Delivery Time' => [
								'value' => 'Two weeks',
								'units' => ''
							]
						]
						, 2 => [
							'Model #' => [
								'value' => 'ILA1575-3',
								'units' => ''
							]
							,'Unit Price' => [
								'value' => '$260.00',
								'units' => ''
							]
							,'Purchase' => [
								'value' => '<img class="paypal-logo" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="Buy now with PayPal" />',
								'units' => ''
							]
							, 'Delivery Time' => [
								'value' => 'Two weeks',
								'units' => ''
							]
						]
					]);
				?>
			
				<p><b><u>IMPORTANT</u>: Microsoft Internet Explorer users: Make sure your pop-up blocker is turned OFF in order to view transaction information.  Or, hold the "Ctrl" key down when clicking on "Add to Cart" or "View Cart" buttons.</b></p>

				<small>Prices and specifications subject to change without notice.  Updated <?php echo($priceUpdateDate); ?></small>
			</div>
		</div>
	</div>

	<?php
		echo $GLOBAL_FOOTER;
		echo $GLOBAL_SCRIPTS;
	?>
</body>
</html>