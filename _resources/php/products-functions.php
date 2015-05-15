<?php
	function createCollapsibleTable($productInfo){
		echo "<table class='collapsible-table'>";

		// Make table head
		echo "<thead class='hidden-xs hidden-sm'>";
		// echo "<td><b>Model #</b></td>";
		foreach (reset($productInfo) as $colName => $v){
			echo"<td>  <b>$colName</b>  <br/>  <i>{$v['units']}</i>  </td>";
		}
		echo "</thead>";

		// Make the table rows
		foreach ($productInfo as $model => $infoSet) {
			echo "<tr>";
			// echo "<td><span class='hidden-md hidden-lg collapsed-label'><u>Model #</u></span><span class='value'>$model</span></td>";
			foreach ($infoSet as $key => $value) {
				echo "	<td>
							<span class='hidden-md hidden-lg collapsed-label'>$key</span>
							<span class='value'>
								{$value['value']}
								<span class='hidden-md hidden-lg collapsed-units'>{$value['units']}</span>
							</span>
						</td>";
			}
			echo "</tr>";
		}

		echo "</table>";
	};
?>