function slider ()
{

	var element = document.querySelector ( '.slider' );
	if ( typeof(element) != 'undefined' && element != null )
	{

		var slide        = document.querySelectorAll ( ".slide" ),
			slidecounter = 0,
			counter      = 1;

		Array.prototype.forEach.call ( slide, function ( el, i )
		{
			slidecounter ++;
		} );

		var sliderwidth = slidecounter * 100;

		document.querySelector ( ".slider" ).style.width = sliderwidth + "%";

		var slidewidth = 100 / slidecounter,
			margin     = slidewidth;

		Array.prototype.forEach.call ( slide, function ( el, i )
		{
			el.style.width = slidewidth + "%";
		} );

		document.querySelector ( ".slide:first-child" ).classList.add ( "first-slide" );
		document.querySelector ( ".first-slide" ).setAttribute ( 'data-left', 0 );

		function slideshow ()
		{
			if ( slidecounter > counter )
			{
				counter ++;
				document.querySelector ( ".first-slide" ).style.marginLeft = "-" + margin + "%";
				document.querySelector ( ".first-slide" ).setAttribute ( 'data-left', margin );
				margin = margin + slidewidth;
			}
			else
			{
				counter                                                    = 1;
				document.querySelector ( ".first-slide" ).style.marginLeft = "0";
				document.querySelector ( ".first-slide" ).setAttribute ( 'data-left', 0 );
				margin = slidewidth;
			}
		}

		var startslideshow = setInterval ( function ()
		{
			slideshow ()
		}, 5000 );

		document.getElementById ( "pauseSlider" ).onclick = function ()
		{
			if ( document.querySelector ( ".slider" ).classList.contains ( "paused" ) )
			{
				startslideshow = setInterval ( function ()
				{
					slideshow ()
				}, 5000 );
				document.querySelector ( ".slider" ).classList.remove ( "paused" );
				this.innerHTML = "&#10073;&#10073;";
			}
			else
			{
				clearInterval ( startslideshow );
				document.querySelector ( ".slider" ).classList.add ( "paused" );
				this.innerHTML = "&#9658;";
			}
		};

		document.getElementById ( "slider-next" ).onclick = function ()
		{ // Next Button
			var firstSlide = document.querySelector ( ".first-slide" ),
				x          = 100 / slidecounter,
				oldMargin  = firstSlide.getAttribute ( 'data-left' );

			if ( slidecounter > counter )
			{
				newMargin = Number ( oldMargin ) + Number ( x );
				counter ++;
			}
			else
			{
				newMargin = 0;
				counter   = 1;
			}

			document.querySelector ( '.first-slide' ).style.marginLeft = '-' + newMargin + '%';
			firstSlide.setAttribute ( 'data-left', newMargin );
			clearInterval ( startslideshow );
			document.querySelector ( '.slider' ).classList.add ( "paused" );
			document.getElementById ( 'pauseSlider' ).innerHTML = "&#9658;";
		};

		document.getElementById ( "slider-prev" ).onclick = function ()
		{  // Previous Button
			var firstSlide = document.querySelector ( ".first-slide" ),
				x          = 100 / slidecounter,
				oldMargin  = firstSlide.getAttribute ( 'data-left' );

			if ( counter > 1 )
			{
				newMargin = Number ( oldMargin ) - Number ( x );
				counter --;
			}
			else
			{
				newMargin = (100 / slidecounter) * (slidecounter - 1);
				counter   = slidecounter;
			}

			document.querySelector ( '.first-slide' ).style.marginLeft = '-' + newMargin + '%';
			firstSlide.setAttribute ( 'data-left', newMargin );

			clearInterval ( startslideshow );
			document.querySelector ( '.slider' ).classList.add ( "paused" );
			document.getElementById ( 'pauseSlider' ).innerHTML = "&#9658;";
		}
	}

}