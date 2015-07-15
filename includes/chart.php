<div class="chart">
	<div>
		<h4><?php echo $data['title']; ?></h4>
	</div>
	<div>
		<span>2014</span>
		<div>
			<?php
				if ( $data['values'][0] >= $data['values'][1] )
				{
					echo '<div style="width: 100%">';
					echo '<span></span><span><span>';
					echo '</div>';
				}
				if ( $data['values'][0] < $data['values'][1] )
				{
					echo '<div style="width: ' . $data['values'][0] * 100 / $data['values'][1] . '%">';
					echo '<span></span><span></span>';
					echo '</div>';
				}
			?>
		</div>
		<span><?php echo $data['labels'][0]; ?></span>
	</div>
	<div>
		<span>2013</span>
		<div>
			<?php
				if ( $data['values'][0] > $data['values'][1] )
				{
					echo '<div style="width: ' . $data['values'][1] * 100 / $data['values'][0] . '%">';
					echo '<span></span><span><span>';
					echo '</div>';
				}
				if ( $data['values'][0] <= $data['values'][1] )
				{
					echo '<div style="width: 100%">';
					echo '<span></span><span></span>';
					echo '</div>';
				}
			?>
		</div>
		<span><?php echo $data['labels'][1]; ?></span>
	</div>
</div>