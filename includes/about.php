<div class="section_content" id="about">
	<div class="mobile">
		<div>
			<h2>About</h2>
			<?php require('includes/data/about_text.php'); ?>
			<?php get_down_link('Download Full Report', 'PetrocelticAnnualReport2014', ''); ?>
		</div>
		<div>
			<h2>2014 Highlights</h2>
			<?php require('includes/data/about_highlights.php'); ?>
			<?php get_down_link('Download 2014 Highlights', '2014_Highlights', ''); ?>
		</div>
		<div>
			<h2>Key Performance Indicators</h2>
			<?php require('includes/data/about_kpis_mobile.php'); ?>
			<?php get_down_link('Download Key Performance Indicators', 'KeyPerformanceIndicators', ''); ?>
		</div>
	</div>

	<div class="slider_wrapper desktop-tablet">
		<div class="slider_control">
			<div class="nav_bar">
				<div class="button active" data-id="about-slide">About &amp; Highlights</div>
				<div class="button" data-id="kpi-slide">Key Performance Indicators</div>
			</div>
		</div>
		<div class="slider_content">
			<div class="slide current" id="about-slide">
				<div id="about-content">
					<div>
						<h2>About</h2>
						<?php require('includes/data/about_text.php'); ?>
						<?php get_down_link('Download Full Report', 'PetrocelticAnnualReport2014', ''); ?>
					</div>
				</div>
				<div id="highlights-content">
					<div>
						<h2>2014 Highlights</h2>
						<?php require('includes/data/about_highlights.php'); ?>
						<?php get_down_link('Download 2014 Highlights', '2014_Highlights', ''); ?>
					</div>
				</div>	
			</div>
			<div class="slide hidden" id="kpi-slide">
				<div id="kpi-content">
					<div>
						<h2>Key Performance Indicators</h2>
						<div>
							<?php require('includes/data/about_kpis_desktop.php'); ?>
						</div>
						<?php get_down_link('Download Key Performance Indicators', 'KeyPerformanceIndicators', ''); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>