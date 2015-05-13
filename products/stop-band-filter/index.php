<!DOCTYPE html>
<html>
<head>
	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/_resources/php/global-functions.php');
		echo $GLOBAL_HEAD;
	?>
	<link rel="stylesheet" type="text/css" href="/_resources/css/products.css">
</head>

<body>
	<?php
		echo $GLOBAL_NAV;
		echo $GLOBAL_SUBNAV;
	?>

	<div class="container">
		<h1>1575 MHz Stop-band Filter</h1>
		<div class="row">
			<div class="col-sm-6">
				<h3>Feautures/Benefits:</h3>
				<ul>
					<li>80 dB rejection</li>
					<li>Handles high power</li>
					<li>Excellent passband performance</li>
					<li>Rugged construction</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<img src="/_resources/images/products/stop-band-filter.png">
			</div>

		</div>

		<div class="row">
			<div class="col-xs-12">
				<h3>Specifications:</h3>
				<h4>Insertion Loss</h4>
				<table>
					<tr>
						<td>1575.42 ± 1.6 MHz</td>
						<td>60 dB, min.</td>
					</tr>
					<tr>
						<td>1575.42 ± 7.0 MHz</td>
						<td>20 dB, min.</td>
					</tr>
					<tr>
						<td>150 MHz to 1530 MHz</td>
						<td>0.6 dB, max.</td>
					</tr>
					<tr>
						<td>1620 MHz to 2000 MHz</td>
						<td>0.6 dB, max.</td>
					</tr>
				</table>
				<ul>
					<li>Maximum RF input without damage: 20 Watts</li>
					<li>Connectors: SMA female, in and out.</li>
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