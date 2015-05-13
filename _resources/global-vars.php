<?php
	set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'].'_resources' );
	require 'php/global-variables.php';
	require 'php/partials/head.php';
	require 'php/partials/nav.php';
	require 'php/partials/subnav.php';
	require 'php/partials/footer.php';
	require 'php/partials/scripts.php';

	$currentYear = date('Y');
	$contactInfo = array(
			'phone' => array(
				'office' => '(408) 839-2203',
				'fax' => '(408) 741-5444',
				'mobile' => '(408) 813-5744'
			)
			, 'email' => 'info@guerra-tech.com'
			, 'address' => array(
				'mailing' => array(
					'line1' => '5205 Prospect Road, #135-157',
					'line2' => 'San Jose, CA 95129'
				)
				, 'physical' => array(
					'line1' => '1650 Zanker Road, Suite 240',
					'line2' => 'San Jose, CA 95112'
				)
			)
		);
	$priceUpdateDate = "4/3/07";

	function createCollapsibleTable($productInfo){
		echo("<table class='collapsibleTable'>");

		echo("<thead class='hidden-xs hidden-sm'>");
		foreach($productInfo[0] as $colName => $v){
			echo("<th>" . $colName . "</th>");
		}
		echo("</thead>");

		foreach($productInfo as $index => $product){
			echo("<tr>");
			foreach($product as $key => $value){
				echo("<td><span class='label-xs visible-xs-inline-block visible-sm-inline-block'>" . $key . "</span><span class='value'>" . $value . "</span></td>");
			}
			echo("</tr>");
		}

		echo("</table>");
	}
?>