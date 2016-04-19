function machine ( $ )
{
	if ( $ ( '#machine-main' ).length )         // use this if you are using id to check
	{
		var pageTitleHeight       = $ ( '.page-title' ).innerHeight (),
			headerHeight          = $ ( 'header' ).innerHeight (),
			scrollContainerHeight = $ ( '#machine-main' ).innerHeight () - 80,  // Just a corrector for the padding
			combinedHeight        = headerHeight + pageTitleHeight,
			initialOffset         = $ ( '#machine-featured-image img' ).offset ().top,
			imageHeight           = $ ( '#machine-featured-image img' ).innerHeight (),
			x                     = initialOffset - headerHeight - 20;

		$ ( '#machine-tabs-buttons' ).mouseleave ( function ()
		{
			scrollContainerHeight = $ ( '#machine-main' ).innerHeight () - 80;
		} );

		function imageMover ()
		{
			if ( $ ( window ).width () > 993 )
			{

				var scrollTop    = $ ( window ).scrollTop (),
					imageHeight  = $ ( '.inner-image-container' ).innerHeight (),
					marginTopFig = (scrollTop - initialOffset) + headerHeight + 20,
					marginScroll = marginTopFig + imageHeight;

				if ( scrollTop >= x )
				{
					if ( marginScroll < scrollContainerHeight )
					{
						$ ( '.inner-image-container' ).css ( 'margin-top', marginTopFig );
					}
					else
					{
						return false;
					}
				}
				else if ( marginScroll < scrollContainerHeight )
				{
					$ ( '.inner-image-container' ).css ( 'margin-top', '0' );
				}
				else
				{
					return false;
				}

			}
			else
			{

				$ ( '.inner-image-container' ).css ( 'margin-top', '0' );

			}
		}

		imageMover ();

		$ ( document ).scroll ( function ()
		{
			imageMover ();
		} );

		$ ( '.inner-image-container' ).click ( function ()
		{
			$ ( this ).toggleClass ( 'lightbox-open' );
		} );
	}
}