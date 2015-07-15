function layout()
{
	var width = $(window).innerWidth();
	var height = $(window).innerHeight();
	var unit = 20;
	var	content_w = 600;
	var content_l = Math.floor( (height - 120) / 20 );
	var content_h = content_l * 20;
	var	space = 60;
	var	column = 100;

	if ( width >= 768 && width < 1024)
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
	$('.top_bar').css(
	{
		width: content_w + space,
		left: unit * 2
	});

	// SET MENU SIZE AND POSITION
	
	$('.menu').removeClass('animate');

	$('.menu').css(
	{
		height: content_h,
		width: content_w + space + unit * 2
	});
	$('.menu nav').css(
	{
		width: content_w + space
		
	});
	$('.menu .control').css(
	{
		width: 2 * unit
		
	});

	if( !$('.menu .control').hasClass('open') ) // if the menu is closed
	{
		$('.menu').css(
		{
			left: - (content_w + space)
		});
	}
	else // if the menu is open
	{
		$('.menu').css(
		{
			left: unit * 2
		});
	}
}
