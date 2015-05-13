<?php
	function createCollapsibleTable($productInfo){
		echo("<table class='collapsible-table'>");

		// Make table head
		echo("<thead class='hidden-xs hidden-sm'>");
		foreach($productInfo[0] as $colName => $v){
			echo("<th>$colName</th>");
		}
		echo("</thead>");

		echo("</table>");
	};
?>