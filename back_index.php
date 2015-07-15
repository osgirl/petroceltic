<!DOCTYPE html>
<html>
<head>
	<?php require_once('inc/config.php');?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Petroceltic - Annual Report &amp; Accounts 2014
		<?php
			if( isset($_GET['cat']) ) {
				echo ' - '. $categories[$_GET['cat']]; 
			}
		?>
	</title>
	<base href="http://petro14.local/">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,900,700,300' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/functions.js"></script>
</head>
<body <?php get_body_class(); ?>>
<?php
	// header
	require_once('inc/mod/shared/header.php'); 
	// pages
	if ( isset($_GET['cat']) ) // subpages
	{
		$folder = $folders[$_GET['cat']][0];

		if(isset($folders[$_GET['cat']][1])) // check if there is a submenu
		{
			$id = $folders[$_GET['cat']][1][$_GET['id']];
			require_once('inc/page/' . $folder . '/' . $folder . '_' . $id . '.php');
			$page_id = $_GET['id'];
		}
		else
		{
			require_once('inc/page/' . $folder . '/' . $folder . '.php');
			$page_id = $_GET['cat'];
		}
	}
	else // home page
	{
		require_once('inc/page/home.php');
		$page_id = 'home';
	}
	// footer
	require_once('inc/mod/shared/footer.php');
?>
</body>
<script src="js/control.js"></script>
</html>