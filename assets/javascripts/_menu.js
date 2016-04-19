function menu ( $ )
{
	$ ( '#burger' ).click ( function ()
	{
		$ ( '#main-menu ul' ).toggleClass ( 'mobile-menu-open' );
		$ ( this ).toggleClass ( 'cooked' );
		$ ( '#shade' ).toggle ();
	} );

	$ ( '#shade' ).click ( function ()
	{
		$ ( '#main-menu ul' ).removeClass ( 'mobile-menu-open' );
		$ ( '#burger' ).removeClass ( 'cooked' );
		$ ( '#shade' ).hide ();
	} );

	$ ( window ).resize ( function ()
	{
		if ( $ ( window ).width () < 993 )
		{
			$ ( '#main-menu ul' ).removeClass ( 'mobile-menu-open' );
			$ ( '#burger' ).removeClass ( 'cooked' );
		}
		else
		{
			$ ( '#main-menu ul' ).addClass ( 'mobile-menu-open' );
			$ ( '#burger' ).removeClass ( 'cooked' );
		}
	} );
};