<header>
	<div id="top-bar">
		<div>
			<div class="logo"></div>
			<div><span>2014</span> Annual Report &amp; Accounts</div>
			<div class="open_menu"><span class="icon-menu"></span></div>
		</div>
	</div>
	<div>
		<div>
			<div><a href="/">Home</a></div>
			<div><span>x<span></div>
		</div>
		<nav>
			<ul>
			<?php
				foreach ($structure as $item)
				{
					echo '<li' . get_active_menu($item['slug']) . '>';
					echo '<span><span>+</span>' . $item['name'] . '</span>';
					// submenu
					echo '<ul>';
					foreach ( $item['submenu'] as $sub_item )
					{
						echo '<li><a href="' . $item['slug'] . '/' . $sub_item['slug'] . '">' .$sub_item['name']. '</a></li>';
					}
					echo '</ul>'; // close submenu
					echo '</li>';
				}
			?>
			</ul>
		</nav>
	</div>
</header>