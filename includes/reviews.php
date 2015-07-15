<div class="section_content" id="reviews">
	<div class="scroll_area">
		<div>
			<div class="button" data-id="scroll-2"><span class="icon-down-open"></span></div>
		</div>
		<div></div>
	</div>
	<div class="top desktop">
		<div class="wrapper">
			<div class="photo" id="ph-1">
				<span></span>
			</div>
			<div class="photo" id="ph-2">
				<span></span>
			</div>
			<div class="photo" id="ph-3">
				<span></span>
			</div>
		</div>
	</div>
	<div class="middle desktop-mobile">
		<div class="wrapper">
			<div>
				<div class="photo mobile" id="ph-1">
					<span></span>
				</div>
				<?php require('includes/data/chairman_text.php'); ?>
				<?php get_down_link('Download Chairman&rsquo;s Statement', 'ChairmansStatement', 'mobile'); ?>
			</div>
			<div>
				<div class="photo mobile" id="ph-2">
					<span></span>
				</div>
				<?php require('includes/data/ceo_text.php'); ?>
				<?php get_down_link('Download Chief Executive&rsquo;s Review', 'ChiefExecutiveReview', 'mobile'); ?>
			</div>
			<div>
				<div class="photo mobile" id="ph-3">
					<span></span>
				</div>
				<?php require('includes/data/cfo_text.php'); ?>
				<?php get_down_link('Download Financial Review', 'FinancialReview', 'mobile'); ?>
			</div>
		</div>
	</div>
	<div class="tablet">
		<div class="wrapper">
			<div class="photo" id="ph-1">
				<span></span>
			</div>
			<div>
				<?php require('includes/data/chairman_text.php'); ?>
				<?php get_down_link('Download Chairman&rsquo;s Statement', 'ChairmansStatement', ''); ?>
			</div>
		</div>
		<div class="top">
			<div class="wrapper">
				<div class="photo" id="ph-2">
					<span></span>
				</div>
				<div class="photo" id="ph-3">
					<span></span>
				</div>
			</div>
		</div>
		<div class="middle">
			<div class="wrapper">
				<?php require('includes/data/ceo_text.php'); ?>
				<?php require('includes/data/cfo_text.php'); ?>
			</div>
		</div>
		<div class="bottom">
			<div class="wrapper">
				<div>
					<?php get_down_link('Download Chief Executive&rsquo;s Review', 'ChiefExecutiveReview', ''); ?>
				</div>
				<div>
					<?php get_down_link('Download Financial Review', 'FinancialReview', ''); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom desktop">
		<div class="wrapper">
			<div>
				<?php get_down_link('Download Chairman&rsquo;s Statement', 'ChairmansStatement', ''); ?>
			</div>
			<div>
				<?php get_down_link('Download Chief Executive&rsquo;s Review', 'ChiefExecutiveReview', ''); ?>
			</div>
			<div>
				<?php get_down_link('Download Financial Review', 'FinancialReview', ''); ?>
			</div>
		</div>
	</div>
</div>