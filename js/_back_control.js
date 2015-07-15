var windowTO;
window.onresize = function()
{
	clearTimeout(windowTO);
	windowTO = setTimeout( function()
	{
		layout();
	}, 300);
}

$(window).scroll( function()
{
	eval_scroll();
});

$(window).load( function()
{
	layout();
});

/* button actions */

$('body.home .down').click(function()
{
	
	if ( $(this).data('scroll_to') == undefined) {
		$(this).data('scroll_to', height);
	}

	val = $(this).data('scroll_to');

	console.log(val);

	$('html, body').animate({
		scrollTop : val
	}, 500);
});

/* HEADER OPEN MENU */

$('.open_menu').click( function() {
	open_main_menu(true);
});

/* HOME PAGE OPERATIONS AT A GLANCE */
$('body.home .map_button').click( function()
{
	if ( view != 'mobile' )
	{
		target = $(this).parent().find('.map_details');
		open_map_details(target);
	}
	else
	{
		target = $(this).parent().find('.map_details a').attr('href');
		window.open( target, '_self');
	}

});

/* FOOTER BUTTONS */
$('footer .back_top').click( function()
{
	$('html, body').animate({
		scrollTop: 0
	}, 800);
});
$('footer .next_page, footer .prev_page').click( function()
{
	if( $(this).data('target') != '')
	{
		window.open($(this).data('target'), '_self');
	}
});
