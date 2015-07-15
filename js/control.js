var windowTO;
window.onresize = function()
{
	clearTimeout(windowTO);
	windowTO = setTimeout( function()
	{
		set_layout();
	}, 150);
}

$(window).scroll( function()
{
	eval_scroll();
});

$(window).load( function()
{
	set_layout();
	add_actions();
	eval_scroll();
});




