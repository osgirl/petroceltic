var width;
var height;
var view;
var offsets;
var home_scroll;

function layout()
{
	width = $(window).innerWidth();
	height = $(window).innerHeight();

	if ( width >= 1440 )
	{
		view = 'x-large';
	}
	else if ( width >= 1280)
	{
		//large
		view = 'large';
	}
	else if ( width < 1280 && width >= 1024 )
	{
		//medium
		view = 'medium';
	}
	else if ( width < 1024 && width >= 768 )
	{
		//small
		view = 'small';
	}
	else
	{
		//mobile
		view = 'mobile';
	}

	if( $('body').hasClass('home') )
	{
		$('footer .prev_page').addClass('inactive');
	}
	if( $('body').hasClass('corporate-information'))
	{
		$('footer .next_page').addClass('inactive');
	}
	set_elements();
}

function set_elements()
{

	if( $('body').hasClass('home') )
	{
		$('#title, #sec-1 > div:last-child, #sec-3 > div:last-child').height(height);
		$('.page_wrapper').css('padding-bottom', height + 'px');
		$('#about, #sec-2, #sec-3').css('min-height', height );
		
		// set the background size for the text
		if( width > height )
		{
			$('#sec-1 h1').css({ 'background-size' : width + 'px auto' });
		}
		else
		{
			$('#sec-1 h1').css({ 'background-size' : 'auto ' + height + 'px' });
		}

		if (view != 'mobile') {
			
			$('#about, #operations').outerHeight(height); // set the height of the About and Highlights section depending on view
			$('#sec-2, #sec-3').outerHeight(height); // set fixed heights for the sections

		}
		else
		{
			$('#about, #operations').height('auto'); // set the height of the About and Highlights section depending on view
			$('#sec-2, #sec-3').outerHeight('auto'); // set flexible heights for the sections

		}

		offsets = [];
		offsets.push(
			$('#sec-1').outerHeight() - height,
			$('#sec-1').outerHeight() + $('#sec-2').outerHeight() - height,
			$('#sec-1').outerHeight() + $('#sec-2').outerHeight() + $('#sec-3').outerHeight()
		);
		
		if ($('.down').data('scroll_to') != undefined)
		{
			console.log(jQuery.data( document.body, 'slide' ));
			switch ( jQuery.data( document.body, 'slide' ) )
			{
				case 0:
					home_scroll = 0;
					break;
				case 1:
					home_scroll = height;
					break;
				case 2:
					home_scroll = offsets[0] + height;
					break;
				case 3:
					home_scroll = offsets[1] + height;
					break;
			}
			$('html, body').animate({
				scrollTop : home_scroll
			});
		}

		if ( $(window).scrollTop() < ( height - 90 ) ) {
			$('#top-bar').removeClass('show'); 
		}
		else
		{
			$('#top-bar').addClass('show');
		}

		if ( jQuery.data( document.body, 'map') != null )
		{
			
			target = jQuery.data( document.body, 'map');
			list = target.parent().parent();
			pos = calc_map( target )[0];
			val = calc_map( target )[1];
			

			if ( view == 'small' || view == 'medium' )
			{
				target.addClass('open').css(
				{
					'max-height': val + 'px',
					height : val,
					'margin-top' : 0
				});

				list.children(':first-child').css({
					'margin-top' : - pos + 'px',
				});
			}
			else if ( view == 'large' || view == 'x-large' )
			{
				target.addClass('open').css(
				{
					'max-height': val + 'px',
					height : val,
					'margin-top' : - pos + 'px'
				});

				list.children(':first-child').css({
					'margin-top' : 0,
				});
			}
		}
	}
}

function eval_scroll() {

	var st = $(window).scrollTop();

	if ($('body').hasClass('home'))
	{
		
		if (st == 0)
		{
			$('.down').removeClass('transparent'); // reset down button
		}
		else if ( st > 0 && st <= offsets[0] )
		{
			$('.down').addClass('transparent');
			$('#sec-1 > div:last-child').removeClass('scroll'); // scroll background

			if ( st < ( height - 90 ) )
			{
				$('#top-bar').removeClass('show'); // header top bar - hide
				$('.down').data('scroll_to', height);
				jQuery.data( document.body, 'slide', 0 );
			}
			else
			{
				$('#top-bar').addClass('show'); // header top bar - show
				$('.down').data('scroll_to', offsets[0] + height );
				jQuery.data( document.body, 'slide', 1 );
			}

			
		}
		else if ( st > offsets[0] && st <= offsets[1] )
		{
			$('.down').removeClass('transparent');
			$('#sec-1 > div:last-child').addClass('scroll'); // scroll background

			if ( st >= (offsets[0] + height) )
			{
				$('#sec-2').addClass('scroll'); // scroll slide
				$('#sec-2 > div').css(
				{
					opacity: 1,
					top: 0
				});
				$('.down').data('scroll_to', offsets[1] + height );
				jQuery.data( document.body, 'slide', 2 );
			}
			else
			{
				$('#sec-2').removeClass('scroll'); // scroll slide
				$('#sec-2 > div').css(
				{
					opacity: ( (st - offsets[0] ) / height ),
					top: ( height - (st - offsets[0] ) ) / 2
				});
				$('.down').data('scroll_to', offsets[0] + height );
				jQuery.data( document.body, 'slide', 1 );
			}
			
		}
		else {		

			
			if ( st >= ( offsets[1] + height ) )
			{
				$('#sec-3').addClass('scroll'); // scroll the map slide
				$('#operations').css(
				{
					opacity: 1,
					top: 0
				});

				$('.down').fadeOut();
				jQuery.data( document.body, 'slide', 3 );
			}
			else
			{
				$('#sec-3').removeClass('scroll'); // scroll the map slide
				$('#operations').css(
				{
					opacity: ( (st - offsets[1] ) / height ),
					top: ( height - (st - offsets[1] ) ) / 2
				})

				$('.down').fadeIn();
				jQuery.data( document.body, 'slide', 2 );
			}

			if ( st >= (offsets[2] - height) )
			{
				$('#sec-3 > div:last-child').addClass('scroll'); // scroll slide
				$('footer').addClass('scroll'); // position the footer
				$('.page_wrapper').css('padding-bottom', 0); // remove padding
			}
			else
			{
				$('#sec-3 > div:last-child').removeClass('scroll'); // scroll slide
				$('footer').removeClass('scroll'); // position the footer
				$('.page_wrapper').css('padding-bottom', height + 'px'); // add padding
			}

		}

	}
}

function calc_map(target) {
	var values = [];

	if ( view == 'small' || view == 'medium' )
	{
		values.push(
			target.parent().position().top,
			$('#operations > div').innerHeight() - $('#operations > div > h2').outerHeight() - target.parent().find('.map_button').outerHeight()
		);
	}
	else if ( view == 'large' || view == 'x-large' )
	{
		values.push(
			target.parent().position().top,
			$('#operations > div').innerHeight() - $('#operations > div > h2').outerHeight()
		);
	}
	
	return values;
}

function open_map_details(target) {
	if ( view == 'small' || view == 'medium' ) {
		
		console.log('tablet style');
		button = target.parent().find('.map_button');
		list = target.parent().parent();

		pos = calc_map(target)[0];
		val = calc_map(target)[1];

		if( !target.hasClass('open'))
		{
			target.addClass('open').css({
				'max-height': val + 'px',
				height : val
			});

			list.children(':first-child').css({
				'margin-top' : - pos + 'px',
			});

			target.parent().addClass('open');
			jQuery.data( document.body, 'map', target );
		}
		else
		{
			target.removeClass('open').css({
				'max-height' : 0,
				height : 0
			});

			list.children(':first-child').css({
				'margin-top' : 0
			});

			target.parent().removeClass('open');
			jQuery.data( document.body, 'map', null );
		}
	}
	else
	{
		console.log('desktop style');

		button = target.parent().find('.map_button');
		list = target.parent().parent();
		
		pos = calc_map(target)[0];
		val = calc_map(target)[1];

		console.log(pos);
		
		if( !target.hasClass('open'))
		{
			
			
			list.find('li.open').find('.map_details').removeClass('open').css({
				'max-height' : 0,
				height : 0,
				'margin-top' : 0
			});

			list.find('li.open').removeClass('open');

			target.addClass('open').css({
				'max-height': val + 'px',
				height : val,
				'margin-top' : - pos + 'px'
			});
			
			target.parent().addClass('open');
			jQuery.data( document.body, 'map', target );
		}
		else
		{
			
			target.removeClass('open').css({
				'max-height' : 0,
				height : 0,
				'margin-top' : 0
			});

			
			target.parent().removeClass('open');
			jQuery.data( document.body, 'map', null );
		}
	}
}