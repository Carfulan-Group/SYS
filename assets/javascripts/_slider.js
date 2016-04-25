function slider ()
{
	var element = document.querySelector ( '.slider' );

	// // //
	// the slider only runs this code if there is actually a slider in the DOM
	// // //
	if ( typeof(element) != 'undefined' && element != null )
	{
		document.querySelector ( ".slide:first-child" ).classList.add ( "first-slide" );

		var slide        = document.querySelectorAll ( ".slide" ),
			firstSlide   = document.querySelector ( '.first-slide' ),
			slideCounter = 0,
			counter      = 1,
			oldMargin    = 0,
			newMargin    = 0,
			interval     = 5000,
			theSlideShow;

		firstSlide.setAttribute ( 'data-left', '0' );

		Array.prototype.forEach.call ( slide, function ()
		{
			slideCounter ++;
		} );

		var sliderWidth = slideCounter * 100;

		document.querySelector ( ".slider" ).style.width = sliderWidth + "%";

		var slideWidth = 100 / slideCounter,
			margin     = slideWidth;

		Array.prototype.forEach.call ( slide, function ( el )
		{
			el.style.width = slideWidth + "%";
		} );

		// // //
		// the function that actually moves the slides
		// // //
		function slideShow ()
		{
			// // //
			// if the slide isn't the last slide
			// // //
			if ( slideCounter > counter )
			{
				counter ++;
				firstSlide.style.marginLeft = "-" + margin + "%";
				firstSlide.setAttribute ( 'data-left', margin );
				margin = margin + slideWidth;
			}
			// // //
			// if it is t he last slide
			// // //
			else
			{
				counter                     = 1;
				firstSlide.style.marginLeft = "0";
				firstSlide.setAttribute ( 'data-left', 0 );
				margin = slideWidth;
			}
		}

		// // //
		// function that make the slides change every X (set in var interval) seconds
		// // //
		function startSlideShow ()
		{
			theSlideShow = setInterval ( function ()
			{
				slideShow ();
			}, interval );
		}

		document.getElementById ( "pauseSlider" ).onclick = function ()
		{
			if ( document.querySelector ( ".slider" ).classList.contains ( "paused" ) )
			{
				startSlideShow ();
				document.querySelector ( ".slider" ).classList.remove ( "paused" );
				this.innerHTML = "&#10073;&#10073;";
			}
			else
			{
				clearInterval ( theSlideShow );
				document.querySelector ( ".slider" ).classList.add ( "paused" );
				this.innerHTML = "&#9658;";
			}
		};

		// // //
		// function that runs when NEXT button is clicked
		// // //
		document.getElementById ( "slider-next" ).onclick = function ()
		{
			var x     = 100 / slideCounter;
			oldMargin = firstSlide.getAttribute ( 'data-left' );

			if ( slideCounter > counter )
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
			clearInterval ( theSlideShow );
			document.querySelector ( '.slider' ).classList.add ( "paused" );
			document.getElementById ( 'pauseSlider' ).innerHTML = "&#9658;";
		};

		// // //
		// function that runs when PREVIOUS button is clicked
		// // //
		document.getElementById ( "slider-prev" ).onclick = function ()
		{
			var x     = 100 / slideCounter;
			oldMargin = firstSlide.getAttribute ( 'data-left' );

			if ( counter > 1 )
			{
				newMargin = Number ( oldMargin ) - Number ( x );
				counter --;
			}
			else
			{
				newMargin = (100 / slideCounter) * (slideCounter - 1);
				counter   = slideCounter;
			}

			document.querySelector ( '.first-slide' ).style.marginLeft = '-' + newMargin + '%';
			firstSlide.setAttribute ( 'data-left', newMargin );

			clearInterval ( theSlideShow );
			document.querySelector ( '.slider' ).classList.add ( "paused" );
			document.getElementById ( 'pauseSlider' ).innerHTML = "&#9658;";
		};

		// runs the timeOut function that makes the next slide rotate every X seconds
		startSlideShow ();
	}

}
