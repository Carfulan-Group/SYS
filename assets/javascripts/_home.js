function home ( $ )
{

	$ ( '#home-video' ).click ( function ()
	{
		var $theSource = $ ( this ).find ( "iframe" ).attr ( 'the-src' );
		$ ( this ).find ( "iframe" ).attr ( 'src', $theSource );
		$ ( this ).find ( "iframe" ).attr ( 'the-src', '' );
		$ ( this ).find ( 'i' ).hide ();
		$ ( this ).removeClass ( 'closed' );
		$ ( 'html, body' ).animate ( {
			scrollTop : $ ( this ).offset ().top - 150
		}, 750 );
		$ ( this ).find ( "iframe" )[ 0 ].src += "&autoplay=1";
		$ ( this ).css ( 'background', '#000' );
	} );

	function paraSize ()
	{
		$ ( '.three-cta' ).each ( function ()
		{
			var $counter = 0,
				$height  = Array ();

			$ ( this ).find ( '.item' ).each ( function ()
			{
				$height[ $counter ] = $ ( this ).innerHeight ();
				$counter ++;
			} );

			var $biggest = Math.max.apply ( Math, $height );

			$ ( this ).find ( '.item' ).each ( function ()
			{
				if ( $ ( this ).innerHeight () < $biggest )
				{
					var $newSpacer = $biggest - $ ( this ).innerHeight ();
					$ ( this ).find ( 'p' ).css ( 'margin-bottom', $newSpacer + 'px' );
				}
			} );
		} );
	}

	paraSize ();

	$ ( '.tweet' ).find ( 'p' ).each ( function ()
	{
		var $this = $ ( this );
		if ( $this.html ().replace ( /\s|&nbsp;/g, '' ).length == 0 )
		{
			$this.remove ();
		}
	} );

}