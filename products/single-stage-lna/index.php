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
						  	  'Model #' => 'LNA1575-1'
						  	, 'Frequency<br/>MHz' => '1575'
						  	, 'Gain<br/>dB, min' => '18'
						  	, 'Noise Figure<br/>dB, max' => '0.5'
						  	, 'Output 1 dB Comp Pt.<br/>dBm, min' => '+14'
						  	, 'VSWR In / Out<br/>typical' => '3 / 1'
						  	, 'DC Curr @ 3.3-12 VDC<br/>mA, typical' => '19'
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
						  	  'Model #' => 'LNA1575-1'
						  	, 'Length' => '1.55"'
						  	, 'Width' => '0.800"'
						  	, 'Body Length' => '0.750"'
						  	, 'Depth' => '0.300"'
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
		echo $GLOBAL_FOOTER;
		echo $GLOBAL_SCRIPTS;
	?>
</body>
</html>