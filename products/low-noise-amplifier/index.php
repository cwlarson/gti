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
								'value' => 'ILA1575-1 (35 dB Gain)',
								'units' => ''
							]
							,'Unit Price' => [
								'value' => '$280.00',
								'units' => ''
							]
							, 'Purchase' => [
								'value' => '
									<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
										<input type="hidden" name="cmd" value="_s-xclick">
										<input type="hidden" name="hosted_button_id" value="7Y8KHE753KPGW">
										<input type="image" class="paypal-logo" src="/_resources/images/products/paypal-buy-logo.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
										<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
									</form>
									<i>Select quantity in next step</i>',
								'units' => ''
							]
							, 'Delivery Time' => [
								'value' => 'Two weeks',
								'units' => ''
							]
						]
						, 1 => [
							'Model #' => [
								'value' => 'ILA1575-2 (24 dB Gain)',
								'units' => ''
							]
							,'Unit Price' => [
								'value' => '$280.00',
								'units' => ''
							]
							, 'Purchase' => [
								'value' => '
									<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
										<input type="hidden" name="cmd" value="_s-xclick">
										<input type="hidden" name="hosted_button_id" value="9YXQZ7F3WDFKG">
										<input type="image" class="paypal-logo" src="/_resources/images/products/paypal-buy-logo.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
										<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
									</form>
									<i>Select quantity in next step</i>',
								'units' => ''
							]
							, 'Delivery Time' => [
								'value' => 'Two weeks',
								'units' => ''
							]
						]
						, 2 => [
							'Model #' => [
								'value' => 'ILA1575-3 (16 dB Gain)',
								'units' => ''
							]
							,'Unit Price' => [
								'value' => '$280.00',
								'units' => ''
							]
							,'Purchase' => [
								'value' => '
									<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
										<input type="hidden" name="cmd" value="_s-xclick">
										<input type="hidden" name="hosted_button_id" value="HEWS3DZQ2DQGC">
										<input type="image" class="paypal-logo" src="/_resources/images/products/paypal-buy-logo.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
										<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
									</form>
									<i>Select quantity in next step</i>',
								'units' => ''
							]
							, 'Delivery Time' => [
								'value' => 'Two weeks',
								'units' => ''
							]
						]
					]);
				?>
			
				<p><b><u class="text-danger">IMPORTANT</u>: Microsoft Internet Explorer users: Make sure your pop-up blocker is turned OFF in order to view transaction information.  Or, hold the "Ctrl" key down when clicking on "Add to Cart" or "View Cart" buttons.</b></p>

				<!-- "Check Out With Paypal" button -->
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" class="paypal-checkout-form">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
					">
					<input type="image" class="paypal-logo" src="/_resources/images/products/paypal-checkout-logo.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Buy now with PayPal" />
				</form>
				
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