(function ($) {

	$.fn.columns = function( options )
	{
		var settings = $.extend( {}, $.fn.columns.defaults, options);
		var col_width = Math.round( this.width() / settings.columns );
		var last_col_width = this.width() - col_width * (settings.columns - 1);
		
		// Initialize columns
		if ( options.action == 'init' )
		{
			// store the column count
			this.data('col-count', settings.columns);
			//
			this.wrapInner('<div class="contents" style="width: 10000px"></div>');
			writeOut( 'initialize / ' + col_width  + ' / ' + last_col_width );
			addColumns(this, settings.columns, col_width, last_col_width);
		}

		// Update columns
		if ( options.action == 'update' ) {

			// Update columns to new column count
			if ( this.data('col-count') != options.columns )
			{
				writeOut( 'update / new column count' );
				this.data( 'col-count', settings.columns );
			}
			else
			{
				writeOut( 'update / same column count' );
			}
		}

		this.on('mousewheel', function()
		{
			writeOut( $(this).find('.contents').position().left );
		})
	};

	function addColumns(target, no, width, last_width)
	{
		//target.wrapInner('column');

	}

	function writeOut( message )
	{
		console.log( message );
	}

	$.fn.columns.defaults = {
		action: 'init',
		columns: 3,
		line_height: 20
	};

}( jQuery ));