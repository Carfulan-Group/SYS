function home ( $ )
{

	$ ( '#home-video' ).click ( function ()
	{
		$theSource = $ ( this ).find ( "iframe" ).attr ( 'the-src' );
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
			$counter = 0;
			$height  = Array ();

			$ ( this ).find ( '.item' ).each ( function ()
			{
				$height[ $counter ] = $ ( this ).innerHeight ();
				$counter ++;
			} );

			$biggest = Math.max.apply ( Math, $height );

			$ ( this ).find ( '.item' ).each ( function ()
			{
				if ( $ ( this ).innerHeight () < $biggest )
				{
					$newSpacer = $biggest - $ ( this ).innerHeight ();
					$ ( this ).find ( 'p' ).css ( 'margin-bottom', $newSpacer + 'px' );
				}
			} );
		} );
	}

	$ ( window ).load ( function ()
	{
		paraSize ();
	} );

	$ ( '.tweet p' ).each ( function ()
	{
		var $this = $ ( this );
		if ( $this.html ().replace ( /\s|&nbsp;/g, '' ).length == 0 )
		{
			$this.remove ();
		}
	} );

	$ ( '.tweet' ).each ( function ()
	{

		$tweetContent = $ ( this ).html ();
		$wordPreP     = $tweetContent.split ( " " ).pop ();
		$word         = $wordPreP.replace ( '<p>', '' ).replace ( '</p>', '' );

		// window.alert($word)

		// $(this).before('<a href="' + $word +'" target="_blank">');
		// $(this).after('</a>')
	} );

}