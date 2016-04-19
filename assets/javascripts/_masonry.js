// Author: Sam Mckay
// Version: 1.3
// Licence: GNU (feel free to pimp)
// Github: https://github.com/sammckay10

function masonry ()
{

	var addEvent = function ( object, type, callback )
	{ // Adds listener for calling the function on resize
		if ( object == null || typeof(object) == 'undefined' )
		{
			return;
		}
		if ( object.addEventListener )
		{
			object.addEventListener ( type, callback, false );
		}
		else if ( object.attachEvent )
		{
			object.attachEvent ( "on" + type, callback );
		}
		else
		{
			object[ "on" + type ] = callback;
		}
	};

	var element = document.querySelector ( '.masonry' );
	if ( typeof(element) != 'undefined' && element != null )
	{

		var item = document.querySelector ( ".masonry" ).getElementsByClassName ( "item" );
		len = item !== null ? item.length : 0,
			i = 0,
			y = 1;
		for ( i; i < len; i ++ )
		{
			item[ i ].className += " item-" + y;
			y ++;
		}

		function masonry ()
		{
			var item    = document.querySelector ( ".masonry" ).getElementsByClassName ( "item" );
			var counter = 0;
			Array.prototype.forEach.call ( item, function ( el )
			{
				counter ++;
				var columns    = 3, // Number of columns
					gap        = 15, // The spacing between rows in px
					number     = counter + columns,
					outer      = el.offsetHeight,
					inner      = el.querySelector ( ".inner" ).offsetHeight,
					difference = (outer - inner) - gap,
					plusItem   = ( document.querySelector ( ".item-" + number ));

				plusItem.style.top          = "-" + difference + "px";
				plusItem.style.marginBottom = "-" + difference + "px";
			} );
		}

		var masonryFixCounter = 0;

		function masonryFixFunction ()
		{
			if ( masonryFixCounter == 10 )
			{
				clearInterval ( masonryFix );
			}
			else
			{
				masonryFixCounter ++;
				masonry ();
			}
		}

		var masonryFix = setInterval ( masonryFixFunction, 500 );

	} // if masonry exists

}
