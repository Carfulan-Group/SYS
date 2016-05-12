<!DOCTYPE html>
<html <?php language_attributes (); ?>>

<head>
	<title>
		<?php wp_title ( '|', true, 'right' ); ?>
	</title>
	<meta charset="<?php bloginfo ( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo ( 'pingback_url' ); ?>">
	<!-- favicons -->
	<link rel="icon" type="image/x-icon" href="<?php echo site_url (); ?>/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#0097d8">
	<meta name="theme-color" content="#0097d8">
	<!-- end of favicons -->
	<!-- Start | Google Forwarding Number-->
	<script type="text/javascript">
		(function ( a, e, c, f, g, b, d )
		{
			var
				h  = { ak : "993330739", cl : "HCFiCNOq-mUQs4zU2QM" };
			a[ c ] = a[ c ] ||
					 function ()
					 {
						 (a[ c ].q = a[ c ].q || []).push ( arguments )
					 };
			a[ f ] ||
			(a[ f ] = h.ak);
			b       = e.createElement ( g );
			b.async = 1;
			b.src   = "//www.gstatic.com/wcm/loader.js";
			d       = e.getElementsByTagName ( g )[ 0 ];
			d.parentNode.insertBefore ( b, d );
			a._googWcmGet = function ( b, d, e )
			{
				a[ c ] ( 2, b, h, d, null, new
					Date, e )
			}
		}) ( window, document, "_googWcmImpl", "_googWcmAk", "script" );
	</script>
	<!-- End | Google Forwarding Number -->
	<?php wp_head (); ?>
</head>

<body onload="_googWcmGet('number', '<?php echo do_shortcode ( '[easy_options id="phone"]' ); ?>')">
<div id="smoothstate" class="m-scene">
	<div <?php body_class (); ?>>
		<!-- Google Tag Manager -->
		<noscript>
			<iframe src="//www.googletagmanager.com/ns.html?id=GTM-NPCXPK"
				height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<script>(function ( w, d, s, l, i )
			{
				w[ l ] = w[ l ] || [];
				w[ l ].push ( {
					'gtm.start' : new Date ().getTime (), event : 'gtm.js'
				} );
				var f                             = d.getElementsByTagName ( s )[ 0 ],
					j = d.createElement ( s ), dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async                           = true;
				j.src                             =
					'//www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore ( j, f );
			}) ( window, document, 'script', 'dataLayer', 'GTM-NPCXPK' );</script>
		<!-- End Google Tag Manager -->
		<header>
			<section id="upper-header">
				<div class="container">
					<div class="pull-left">
						<?php wp_nav_menu ( array ( 'theme_location' => 'social-menu', 'container_class' => 'small-hide' ) ); ?>
					</div>
					<div class="pull-right">
						<?php $phone = do_shortcode ( '[easy_options id="phone"]' ); ?>
						<span><a href="tel:<?php echo $phone; ?>"><i class="icon-phone"></i><span class="number" style="padding: 0;margin: 0;"><?php echo $phone; ?></span></a></span>
						<span><a href="mailto:info@sys-uk.com"><i class="icon-mail"></i>info@sys-uk.com</a></span>
					</div>
				</div>
			</section>
			<section class="container">
				<div id="lower-header">
					<a href="<?php echo site_url (); ?>">
						<img src="<?php echo get_template_directory_uri (); ?>/assets/images/sys-logo-left-half.png" id="header-logo" class="pull-left loading" title="SYS Systems 3D Printing" alt="SYS Systems Logo Left Half">
						<img src="<?php echo get_template_directory_uri (); ?>/assets/images/sys-logo-right-half.png" id="header-logo" class="pull-left" title="SYS Systems 3D Printing" alt="SYS Systems Logo Right Half">
					</a>
					<nav id="main-menu">
						<div id="burger">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<?php wp_nav_menu ( array ( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
			</section>
		</header>

		<div class="fade">
			<div id="aside-button-open" class="aside-button">
				<span class="icon-right-open"></span>
			</div>
			<div id="shade"></div>
			<aside class="sidebar">
				<div class="aside-inner">
					<form action="<?php echo home_url ( '/' ); ?>" role="search" id="searchform" method="get">
						<input type="text" value="" name="s" class="sys-input col-xs-8" id="s" placeholder="Criteria"/>
						<input type="submit" id="searchsubmit" class="sys-button col-xs-4" value="Search"/>
					</form>
					<div class="social">
						<?php wp_nav_menu ( array ( 'theme_location' => 'social-menu' ) ); ?>
					</div>
					<div class="contact">
						<h4>Get in touch</h4>
						<?php echo do_shortcode ( '[caldera_form id="CF561e747d4cec5"]' ) ?>
					</div>
					<div class="close aside-button">
						<span class="icon-left-open"></span>
					</div>
				</div>
			</aside>
