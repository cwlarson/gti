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
		<h1>1575 MHz Single Stage LNA</h1>
		<div class="row">
			<div class="col-sm-6">
				<h3>Feautures/Benefits:</h3>
				<ul>
					<li>High dynamic range</li>
					<li>Rugged construction</li>
					<li>Small form factor</li>
					<li>Water-resistant</li>
					<li>Four mounting holes</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<img src="/_resources/images/products/single-stage-lna.png">
			</div>

		</div>

		<div class="row">
			<div class="col-xs-12">
				<h3>Specifications:</h3>
				<?php
					createCollapsibleTable([
						0 => [
						  	'Model #' => [
								'value' => 'LNA1575-1',
								'units' => ''
							]
							,'Frequency' => [
						  		'value' => '1575',
						  		'units' => 'MHz'
						  	]
						  	, 'Gain' => [
						  		'value' => '18',
						  		'units' => 'dB, min'
						  	]
						  	, 'Noise Figure' => [
						  		'value' => '0.5',
						  		'units' => 'dB, max'
						  	]
						  	, 'Output 1 dB Comp Pt.' => [
						  		'value' => '+14',
						  		'units' => 'dBm, min'
						  	]
						  	, 'VSWR In / Out' => [
						  		'value' => '3 / 1',
						  		'units' => 'typical'
						  	]
						  	, 'DC Curr @ 3.3-12 VDC' => [
						  		'value' => '19',
						  		'units' => 'mA, typical'
						  	]
						]
					]);
				?>
				<ul>
					<li>The input connector is identified with black mounting hardware.</li>
					<li>Maximum RF inpt without damage is +12 dBm.</li>
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
						  		'value' => 'LNA1575-1',
						  		'units' => ''
						  	]
						  	, 'Length' => [
						  		'value' => '1.55"',
						  		'units' => ''
						  	]
						  	, 'Width' => [
						  		'value' => '0.800"',
						  		'units' => ''
						  	]
						  	, 'Body Length' => [
						  		'value' => '0.750"',
						  		'units' => ''
						  	]
						  	, 'Depth' => [
						  		'value' => '0.300"',
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