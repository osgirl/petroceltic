<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Petroceltic - Annual Report &amp; Financial Statements 2014</title>
	<base href="http://petro14.local/">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		html, body {
			min-width: 760px;
			min-height: 580px;
			width: 100%;
			height: 100%;
			position: relative;
		}
		.control {
			position: fixed;
			bottom: 10px;
			right: 10px;
			z-index: 5;
		}
		.content {
			position: absolute;
			top: 100px;
			overflow-x: scroll;
			overflow-y: hidden;
			-webkit-overflow-scrolling: touch;
			background: blue;
		}
		.content div {
			float: left;
			background: yellow;
			
		}
		.content div:nth-child(even){
			background: red;
		}
		.column {
			box-sizing: border-box;
			padding: 20px;
		}
		header {
			position: absolute;
			top: 0;
			left: 0;
			z-index: 2;
		}
		header nav {
			height: 300px;
			background: orange;
			position: absolute;
			top: 100px;
		}
		header div.bar {
			height: 30px;
			background: gray;
			position: absolute;
		}
		p {
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
			line-height: 20px;
		}

		@media screen and (min-width: 1440px) {
			p {
				font-size: 17px;
				line-height: 24px;
			}
			header div.bar {
				height: 36px;
			}
			header nav {
				top: 144px;
			}
			.content {
				top: 144px;
			}
			.column {
				padding: 24px;
			}
		}
	</style>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery-1.11.2.min.js"></script>
</head>
<body>
	<div class="control"></div>
	<header>
		<div class="bar"></div>
		<nav class="menu"></nav>
	</header>
	<div class="content">
		<div class="column col-2">
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
		</div>
		<div class="column col-1"></div>
		<div class="column col-3">
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
		</div>
	</div>
	<div class="background"></div>
	<footer>
	</footer>
</body>
<script>
	
	
	function set_grid()
	{
		var width = $(window).innerWidth();
		var height = $(window).innerHeight();
		var unit = 20;
		var	content_w = 600;
		var content_l = Math.floor( (height - 120) / 20 );
		var content_h = content_l * 20;
		var	space = 60;
		var	column = 100;

		if ( width < 1024)
		{
			unit = Math.floor( width / 38 );
			content_w = unit * 30;
			space = Math.floor (( width - unit * 32 ) / 2);
			column = unit * 5;
			content_l = Math.floor( (height - 120) / 20 );
			content_h = content_l * 20;
		}
		else if ( width >= 1024 && width < 1280 )
		{
			unit = Math.floor( width / 50 );
			content_w = unit * 42;
			space = Math.floor (( width - unit * 44 ) / 2);
			column = unit * 7;
			content_l = Math.floor( (height - 120) / 20 );
			content_h = content_l * 20;
		}
		else if ( width >= 1280 && width < 1440)
		{
			unit = Math.floor( width / 64 );
			content_w = unit * 54;
			space = Math.floor (( width - unit * 56 ) / 2);
			column = unit * 9;
			content_l = Math.floor( (height - 120) / 20 );
			content_h = content_l * 20;
		}
		else if ( width >= 1440)
		{
			unit = Math.floor( width / 72 );
			content_w = unit * 60;
			space = Math.floor (( width - unit * 62 ) / 2);
			column = unit * 10;
			content_l = Math.floor( (height - 192) / 24 );
			content_h = content_l * 24;
		}

		$('.content').css(
		{
			width: content_w,
			height: content_h,
			left : 2 * unit + space
		});

		for( i = 1; i <= 6; i++ )
		{
			$( '.col-' + i ).css(
			{
				width : column * i
			});			
		}
		$('header div.bar').css(
		{
			width: content_w + space,
			left: unit * 2
		});
		$('header nav.menu').css(
		{
			width: 2 * unit,
			height: content_h
		});

		$('body .control').text('width: ' + width + ' height: ' + height + ' unit: ' + unit );
	}


	var windowTO;
	window.onresize = function()
	{
		clearTimeout(windowTO);
		windowTO = setTimeout( function()
		{
			set_grid();
		}, 300);
	}

	$(window).load( function()
	{
		set_grid();
	});
</script>
</html>