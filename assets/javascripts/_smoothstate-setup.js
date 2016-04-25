// makes sure js is called on DOM ready
function pageLoad ( $ )
{
	slider ( $ );
	menu ( $ );
	masonry ( $ );
	machine ( $ );
	home ( $ );
	footer ( $ );
	contactForm ( $ );
	aside ( $ );
	initiateHeadroom (); // does not need jQuery

	// set up for lazy loading images
	new Layzr ( {
		threshold : 70
	} );
}

jQuery ( document ).ready ( function ( $ )
{
	//call pageLoad when the DOM is ready
	pageLoad ( $ );
	// makes sure the opacity is good n' proper
	$ ( '.fade' ).addClass ( 'fade--in' );

	// // // // // // // // // // // // // // //

	// start smoothstate
	$ ( '#smoothstate' ).smoothState ( {
		// prefetches content before the user releases their finger (touchscreen)
		prefetch : true,
		allowFormCaching : false,
		forms : '',

		// runs once the ajax request starts
		onStart : {
			render : function ()
			{
				$ ( '.fade' ).removeClass ( 'fade--in' );
				$ ( '.loading' ).addClass ( 'spin' );
				$ ( 'body' ).animate ( { scrollTop : 0 }, '1000' );
			}
		},

		// stuff to run once the new content has been loaded and added to the DOM

		onAfter : function ()
		{
			pageLoad ( $ );
			//$ ( window ).trigger ( 'load' );
			$ ( '.loading' ).removeClass ( 'spin' );
			$ ( '.fade' ).addClass ( 'fade--in' );
		}

	} ).data ( 'smoothState' )

} ); // jquery DOM ready
