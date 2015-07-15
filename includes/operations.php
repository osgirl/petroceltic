<div class="section_content" id="operations">
	<div class="scroll_area">
		<div>
			<div class="button" data-id="scroll-4"><span class="icon-down-open"></span></div>
		</div>
		<div></div>
	</div>
	<div class="wrapper">
		<div class="mobile">
			<div>
				<h2>Operational Review</h2>
				<?php require('includes/data/operations_content_mobile.php'); ?>
				<?php get_down_link('Download Operational Review', 'OperationalReviews', ''); ?>
			</div>
		</div>

		<div class="slider_wrapper desktop-tablet">
			<div class="slider_control">
				<div class="nav_bar">
					<div class="button active" data-id="algeria-slide">Algeria</div>
					<div class="button" data-id="egypt-slide">Egypt</div>
					<div class="button" data-id="bulgaria-slide">Bulgaria</div>
					<div class="button" data-id="romania-kurdistan-slide">Romania &amp; Kurdistan</div>
					<div class="button" data-id="italy-greece-slide">Italy &amp; Greece</div>
				</div>
			</div>
			<div class="slider_content">
				<div class="slide current" id="algeria-slide">
					<div>
						<div>
							<h2>Algeria</h2>
						</div>
						<?php require('includes/data/algeria.php'); ?>
					</div>
				</div>
				<div class="slide hidden" id="egypt-slide">
					<div>
						<div>
							<h2>Egypt</h2>
						</div>
						<?php require('includes/data/egypt.php'); ?>
					</div>
				</div>
				<div class="slide hidden" id="bulgaria-slide">
					<div>
						<div>
							<h2>Bulgaria</h2>
						</div>
						<?php require('includes/data/bulgaria.php'); ?>
					</div>
				</div>
				<div class="slide hidden" id="romania-kurdistan-slide">
					<div class="half">
						<div>
							<h2><span>Romania (relenquished)</span></h2>
						</div>
						<?php require('includes/data/romania.php'); ?>
					</div>
					<div class="half">
						<div>
							<h2><span>Kurdistan Region of Iraq (relenquished)</span></h2>
						</div>
						<?php require('includes/data/kurdistan.php'); ?>
					</div>
				</div>
				<div class="slide hidden" id="italy-greece-slide">
					<div class="half">
						<div>
							<h2><span>Italy</span></h2>
						</div>
						<?php require('includes/data/italy.php'); ?>
					</div>
					<div class="half">
						<div>
							<h2><span>Greece</span></h2>
						</div>
						<?php require('includes/data/greece.php'); ?>
					</div>
				</div>
			</div>
			<?php get_down_link('Download Operational Review', 'OperationalReviews', ''); ?>
		</div>
	</div>
</div>