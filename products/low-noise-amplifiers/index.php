<!DOCTYPE html>
<html>
<head>
	<?php
		$root = $_SERVER['DOCUMENT_ROOT'];
		include($root.'/_resources/partials/head.html');
		include($root.'/_resources/global-vars.php');
	?>
	<link rel="stylesheet" type="text/css" href="/_resources/css/products.css">
</head>

<body>
	<?php include($root.'/_resources/partials/nav.html'); ?>
	<?php include($root.'/_resources/partials/products-subnav.html'); ?>

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
						  	  'Model #' => 'ILA1575-1'
						  	, 'Frequency<br/>MHz' => '1575'
						  	, 'Gain<br/>dB, min' => '35'
						  	, 'Noise Figure<br/>dB, max' => '3'
						  	, 'Output 1 dB Comp Pt.<br/>dBm, min' => '+7'
						  	, 'VSWR In / Out<br/>typical' => '2.5 / 1.9'
						  	, 'DC Curr @ 3.3-12 VDC<br/>mA, typical' => '26 @ 4 volts'
						]
						, 1 => [
						  	  'Model #' => 'ILA1575-2'
						  	, 'Frequency<br/>MHz' => '1575'
						  	, 'Gain<br/>dB, min' => '24'
						  	, 'Noise Figure<br/>dB, max' => '3'
						  	, 'Output 1 dB Comp Pt.<br/>dBm, min' => '+7'
						  	, 'VSWR In / Out<br/>typical' => '2.5 / 1.9'
						  	, 'DC Curr @ 3.3-12 VDC<br/>mA, typical' => '26 @ 4 volts'
						]
						, 2 => [
						  	  'Model #' => 'ILA1575-3'
						  	, 'Frequency<br/>MHz' => '1575'
						  	, 'Gain<br/>dB, min' => '16'
						  	, 'Noise Figure<br/>dB, max' => '2'
						  	, 'Output 1 dB Comp Pt.<br/>dBm, min' => '+10'
						  	, 'VSWR In / Out<br/>typical' => '3.0 / 3.0'
						  	, 'DC Curr @ 3.3-12 VDC<br/>mA, typical' => '26 @ 4 volts'
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
						  	  'Model #' => 'ILA1575-1'
						  	, 'Length' => '2.35"'
						  	, 'Width' => '0.80"'
						  	, 'Body Length' => '1.60"'
						  	, 'Depth' => '0.30"'
						]
						, 1 => [
						  	  'Model #' => 'ILA1575-2'
						  	, 'Length' => '2.35"'
						  	, 'Width' => '0.80"'
						  	, 'Body Length' => '1.60"'
						  	, 'Depth' => '0.30"'
						]
						, 2 => [
						  	  'Model #' => 'ILA1575-3'
						  	, 'Length' => '3.00"'
						  	, 'Width' => '0.80"'
						  	, 'Body Length' => '1.54"'
						  	, 'Depth' => '0.70"'
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
				<h3>Pricing</h3>
				<table>
					<thead>
						<th>Model</th>
						<th>Unit Price</th>
						<th></th>
					</thead>
					<tr>
						<td>ILA1575-1 (35 dB Gain)</td>
						<td>$260.00</td>
						<td></td>
					</tr>
					<tr>
						<td>ILA1575-2 (24 dB Gain)</td>
						<td>$260.00</td>
						<td></td>
					</tr>
					<tr>
						<td>ILA1575-3 (16 dB Gain)</td>
						<td>$260.00</td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2">Quantity pricing available</td>
						<td></td>
					</tr>
				</table>
				<p><b><u>IMPORTANT</u>: Microsoft Internet Explorer users: Make sure your pop-up blocker is turned OFF in order to view transaction information.  Or, hold the "Ctrl" key down when clicking on "Add to Cart" or "View Cart" buttons.</b></p>

				<small>Prices and specifications subject to change without notice.  Updated <?php echo($priceUpdateDate); ?></small>
			</div>
		</div>
	</div>

	<?php 
		include($root.'/_resources/partials/footer.html');
		include($root.'/_resources/partials/scripts.html');
	?>
</body>
</html>