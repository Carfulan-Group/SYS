function aside ( $ )
{
	var button  = $ ( '.aside-button' ),
		sidebar = $ ( '.sidebar' );

	button.mouseenter ( function ()
	{
		$ ( '.sidebar' ).addClass ( 'open-sidebar' );
		$ ( '#search-bar' ).focus ();
	} );

	sidebar.mouseleave ( function ()
	{
		$ ( '.sidebar' ).removeClass ( 'open-sidebar' );
	} );

	button.click ( function ()
	{
		$ ( '.sidebar' ).toggleClass ( 'open-sidebar' );
	} );
}