function initiateHeadroom ()
{
	// grab an element
	var myElement = document.querySelector ( "header" );
	// construct an instance of Headroom, passing the element

	Headroom.options.offset    = 250;
	Headroom.options.tolerance = 10;

	var headroom = new Headroom ( myElement );
	// initialise
	headroom.init ();
}
