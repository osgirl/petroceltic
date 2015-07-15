var scroll_position;
var w_height;
var w_width;
var offsets;
var view;
var orientation;

function set_layout() {
	
	w_height = $(window).innerHeight();
	w_width = $(window).innerWidth();

	check_size();
	
	$('#scroll-0').css('height', w_height);
	$('#scroll-5').css('min-height', w_height - 72);

	if ( orientation == 'portrait')
	{
		$('.page_background').attr('style', 'height:' + w_height + 'px; background-size: auto 100%' );
	}
	else
	{
		$('.page_background').attr('style', 'height:' + w_height + 'px; background-size: 100%' );
	}

	var t_width = $('#title').width();
	var t_height = $('#title').height();

	console.log( t_width, t_height );

	if ( t_height >= t_width )
	{

		$('#right').hide();
		$('#left').width(t_width);
		$('#title-logo').css(
		{
			width: '100%',
			height: Math.floor( t_width * .19 )
		});
		$('#title-text').css(
		{
			width: '100%',
			height: Math.floor( t_width * .69 )
		});
		$('#title-spacer').css(
		{
			width: '100%',
			height: t_height - $('#title-text').height() - $('#title-logo').height()
		})
	}
	else
	{
		$('#right').show().css(
		{
			width: t_width - t_height
		});
		$('#left').width(t_height);
		$('#title-logo').css(
		{
			width: t_height,
			height: Math.floor( t_height * .2 )
		});
		$('#title-text').css(
		{
			width: t_height,
			height: Math.floor( t_height * .7 )
		});
		$('#title-spacer').css(
		{
			width: '100%',
			height: t_height - $('#title-text').height() - $('#title-logo').height()
		})
	}

	offsets = [
		0,
		w_height
	];

	$('#strategy').find('.middle.desktop-tablet').find('.key').each( function()
	{
		
		key_height = $(this).height();
		$(this).find('> div > div').innerHeight( key_height );

	});

	
}

function eval_scroll() {

	st = $(window).scrollTop();

	if ( st >= w_height ) {
		$('header').addClass('show');
	} else {
		$('header').removeClass('show');
	}

	if ( st >= $('#scroll-2').offset().top ) {
		$('.page_background').addClass('map');
	}
	else
	{
		$('.page_background').removeClass('map');
	}
}

function add_actions() {
	
	$('#about .kpi .button').click( function()
	{

		if( $(this).parent().hasClass('closed') )
		{
			
			$(this).parent().find('.content_wrapper').slideDown( 200, function()
			{
				$(this).parent().removeClass('closed');

			});
			$(this).find('span').removeClass('icon-down-open').addClass('icon-up-open');
		}
		else
		{
			
			$(this).parent().find('.content_wrapper').slideUp( 200, function()
			{	
				$(this).parent().addClass('closed');
			});
			$(this).find('span').removeClass('icon-up-open').addClass('icon-down-open');
		}
	})

	$('#operations .country .button').click( function()
	{

		if( $(this).parent().hasClass('closed') )
		{
			
			$(this).parent().find('.content_wrapper').slideDown( 200, function()
			{
				$(this).parent().removeClass('closed');

			});
			$(this).find('span').removeClass('icon-down-open').addClass('icon-up-open');
		}
		else
		{
			
			$(this).parent().find('.content_wrapper').slideUp( 200, function()
			{	
				$(this).parent().addClass('closed');
			});
			$(this).find('span').removeClass('icon-up-open').addClass('icon-down-open');
		}
	})

	$('#strategy .button').click( function()
	{

		if( $(this).parent().hasClass('closed') )
		{
			
			$(this).parent().find('.content_wrapper').slideDown( 200, function()
			{
				$(this).parent().removeClass('closed');
			});
			$(this).find('span').removeClass('icon-down-open').addClass('icon-up-open');
		}
		else
		{
			
			$(this).parent().find('.content_wrapper').slideUp( 200, function()
			{
				$(this).parent().addClass('closed');
			});
			$(this).find('span').removeClass('icon-up-open').addClass('icon-down-open');
		}
	});

	$('.scroll_area .button').click( function() 
	{
		scroll_position = $( '#' + $(this).data('id') ).offset().top;
		$('html, body').animate(
		{
			scrollTop: scroll_position
		})
	});

	$('.nav_bar .button').click( function() 
	{
		current = $(this).parent().parent().parent().find('.current');
		target = $('#' + $(this).data('id') );
		
		if ( target.hasClass('hidden') )
		{

			$(this).parent().find('.active').removeClass('active');
			$(this).addClass('active');

			current.slideUp( function()
			{
				$(this).removeClass('current').addClass('hidden');
			});
			target.slideDown( function()
			{
				$(this).removeClass('hidden').addClass('current');
			});
		}
	});

	$('header .open_menu').click( function()
	{
		if( $(this).hasClass('active') ) 
		{
			$(this).removeClass('active');
			$(this).find('span').removeClass('icon-cancel').addClass('icon-menu');

			$('#sections-menu').slideUp();
		}	
		else
		{
			$(this).addClass('active');
			$('header .download_menu').removeClass('active');
			$('header .download_menu').find('span').removeClass('icon-cancel').addClass('icon-download');
			$(this).find('span').removeClass('icon-menu').addClass('icon-cancel');

			$('#download-menu').slideUp();
			$('#sections-menu').slideDown();
		}
	});

	$('header .download_menu').click( function()
	{
		if( $(this).hasClass('active') ) 
		{
			$(this).removeClass('active');
			$(this).find('span').removeClass('icon-cancel').addClass('icon-download');

			$('#download-menu').slideUp();
		}	
		else
		{
			$(this).addClass('active');
			$('header .open_menu').removeClass('active');
			$('header .open_menu').find('span').removeClass('icon-cancel').addClass('icon-menu');
			$(this).find('span').removeClass('icon-download').addClass('icon-cancel');

			$('#sections-menu').slideUp();
			$('#download-menu').slideDown();
		}
	});

	$('header nav li span').click( function()
	{
		scroll_position = $( '#' + $(this).data('id') ).offset().top;
		$('html, body').animate(
		{
			scrollTop: scroll_position
		})

		$('header .open_menu').removeClass('active');
		$('header .open_menu').find('span').removeClass('icon-cancel').addClass('icon-menu');
		$('#sections-menu').slideUp(100);
	})
}

function check_size() {

	if ( w_width >= 1280)
	{
		//large
		view = 'desktop';
	}
	else if ( w_width < 1280 && w_width >= 768 )
	{
		//medium
		view = 'tablet';
	}
	else
	{
		view = 'mobile';
	}

	if ( w_height >= w_width ) {
		orientation = 'portrait';
	}
	else
	{
		orientation = 'landscape';
	}
}