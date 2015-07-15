<div>
	<h4>The Board assesses the Company’s performance through the measurement of specific KPIs</h4>
	<ul class="highlights">
		<li>
			<span class="icon-right-dir"></span>
			<span>Production was in line with guidance for the year 2014</span>
		</li>
		<li>
			<span class="icon-right-dir"></span>
			<span>Reserves decreased during 2014 primarily due to the farm-out to Sonatrach who acquired Algerian reserves of 97.3 MMboe</span>
		</li>
		<li>
			<span class="icon-right-dir"></span>
			<span>The number of lost time injuries (LTI) reduced significantly in 2014</span>
		</li>
	</ul>
</div>
<div class="kpi">
	<div class="button">
		<h3>Operational Performance Indicators</h3>
	</div>
	<div class="content_wrapper">
		<?php
			$data = array(
				'title' => 'Production - working interest (boepd)',
				'values' => array( 22457, 25171 ),
				'labels' => array( '22,457', '25,171' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Production - net entitlement (boepd)',
				'values' => array( 11876, 13870 ),
				'labels' => array( '11,876', '13,870' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Proved plus probable reserves - working interest (Mboe)',
				'values' => array( 245125, 360693 ),
				'labels' => array( '245,125', '360,693' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Lost time injuries',
				'values' => array( 2, 6 ),
				'labels' => array( '2', '6' )
			);
			require ('includes/chart.php');
		?>
	</div>
</div>
<div class="kpi">
	<div class="button">
		<h3>Financial Performance Indicators</h3>
	</div>
	<div class="content_wrapper">
		<?php
			$data = array(
				'title' => 'Revenue ($ m)',
				'values' => array( 157, 197 ),
				'labels' => array( '157', '197' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'EBITDAX ($ m)',
				'values' => array( 102, 145 ),
				'labels' => array( '102', '145' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Group net indebtedness ($ m)',
				'values' => array( 153, 246 ),
				'labels' => array( '153', '246' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Net indebtedness/EBITDAX',
				'values' => array( 1.5, 1.7 ),
				'labels' => array( '1.5', '1.7' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Interest cover',
				'values' => array( 5.5, 6.6 ),
				'labels' => array( '5.5x', '6.6x' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Operating costs ($ per boe - working basis)',
				'values' => array( 3.1, 2.3 ),
				'labels' => array( '3.1', '2.3' )
			);
			require ('includes/chart.php');
		?>
	</div>
</div>
<div class="kpi">
	<div class="button">
		<h3>Investment Activity</h3>
	</div>
	<div class="content_wrapper">
		<?php
			$data = array(
				'title' => 'Capital expenditure',
				'values' => array( 109, 161 ),
				'labels' => array( '109', '161' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Exploration',
				'values' => array( 70, 34 ),
				'labels' => array( '70%', '34%' )
			);
			require ('includes/chart.php');
			$data = array(
				'title' => 'Development',
				'values' => array( 30, 66 ),
				'labels' => array( '30%', '66%' )
			);
			require ('includes/chart.php');

		?>
	</div>
</div>