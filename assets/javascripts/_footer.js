function footer ( $ )
{
	$ ( '#footer-community' ).find ( 'i' ).each ( function ()
	{
		$ ( this ).after ( $ ( this ).attr ( 'title' ) );
	} );
}