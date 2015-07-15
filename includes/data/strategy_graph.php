<div>
	<h3>Sustainable and clear long term production profile</h3>
	<h4>Mboepd, Working Interest basis</h4>
	<div class="legend">
		<span>Gas</span>
		<span>Liquids</span>
	</div>
</div>
<div>
	<span>50<br>40<br>30<br>20<br>10<br>0</span>
</div>
<div>
	<div class="graph_contents">
		<div class="bars">
		<?php
			$values = array(
				'total' => array( .36, .35, .35, .49, .98, .94, .91, .89, .86, .84, .83, .82, 1, .95, .8, .78, .77, .74 ),
				'liquids' => array( .85, .87, .87, .78, .75, .74, .74, .74, .76, .76, .76, .76, .79, .75, .74, .74, .74, .73 )
			);

			for ($x = 1; $x <= 18; $x ++)
			{
				echo '<div class="bar">';
				echo '<div class="draw" style="height: ' . ( 100 * $values['total'][$x - 1] ) . '%">';
				echo '<span style="height: ' . ( 100 * ( 1 - $values['liquids'][$x - 1] ) ) . '%"></span>';
				echo '<span style="height: ' . ( 100 * $values['liquids'][$x - 1] ) . '%"></span>';
				echo '</div>';
				echo '<span>' . ( 2014 + $x ) . '</span>';
				echo '</div>';
			}
		?>
		</div>
		<div class="back">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
