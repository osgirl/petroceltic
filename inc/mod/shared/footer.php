<?php

	if(!isset($_GET['cat']))
	{
		$prev_page = '';
		$next_page = $structure[0]['slug'] . '/' . $structure[0]['submenu'][0]['slug'];
	}
	else
	{
		//echo 'class="' . $_GET['cat'] . '"';
	}
	/*
	foreach ($structure as $item)
	{
		if ( $item[type] == 'single' )
		{
			$folders[$item['slug']] = array(
				$item['folder']
			);
		}
		else
		{
			$array = array();
			foreach ($item['submenu'] as $sub_item)
			{
				$array[$sub_item['slug']] = $sub_item['id'];
			}

			$folders[$item['slug']] = array(
				$item['folder'],
				$array
			);
		}
	}
	*/
?>
<footer>
	<div class="nav_bar">
		<div>
			<div class="back_top"><span class="icon-arrow"></span></div>
			<div class="next_page" data-target="<?php echo $next_page; ?>"><span class="icon-arrow"></span></div>
			<div class="prev_page" data-target="<?php echo $prev_page; ?>"><span class="icon-arrow"></span></div>
		</div>
	</div>
	<div class="credits">
		<div>
			<p>For more infomation please visit the  <a href="http://petroceltic.com/investor-centre.aspx" target="_blank">Investor Centre</a> on our website.</p>
			<div><a href="/download.php">Download PDF</a></div>
		</div>
		<div>
			<span>&copy; 2015 Petroceltic</span>
			<span>Site design: <a href="http://www.sourcedesign.ie" target="_blank">Source</a></span>
		</div>
	</div>
</footer>