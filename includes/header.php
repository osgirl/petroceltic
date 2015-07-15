<?php
	function get_down_link($name, $link, $classes)
	{

		$size = round( filesize('files/' . $link . '.pdf') / 1000 );
		echo '<div class="download ' . $classes . '">';
		echo '<a href="files/' . $link . '.pdf" target="_blank">';
		
		echo '<span class="icon-file-pdf"></span>';
		echo '<span>' . $name . ' <span>(PDF ' . $size . 'KB)</span></span>';

		echo '</a>';
		echo '</div>';
	}
?>

<header>
	<div class="top_bar">
		<div>
			<div class="logo">
				<div><span></span></div>
				<span>2014 Annual Report &amp; Accounts</span>
			</div>
			<div class="menus">
				<div class="open_menu">
					<span class="icon-menu"></span>
				</div>
				<div class="download_menu">
					<span class="icon-download"></span>
				</div>		
			</div>
		</div>
		<nav>
			<div id="sections-menu">
				<ul>
					<li><span data-id="scroll-1">2014 Highlights</span></li>
					<li><span data-id="scroll-2">Management&rsquo;s Reports</span></li>
					<li><span data-id="scroll-3">Corporate Strategy</span></li>
					<li><span data-id="scroll-4">Operational Review</span></li>
					<li><span data-id="scroll-5">Downloads</span></li>
				</ul>
			</div>
			<div id="download-menu">
				<div>
					<?php get_down_link('Full Annual Report', 'PetrocelticAnnualReport2014', ''); ?>
					<?php get_down_link('Financial Statements', 'FinancialStatements', ''); ?>
				</div>
			</div>
		</nav>
	</div>
</header>