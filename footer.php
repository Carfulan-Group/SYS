<footer>
	<section id="upper-footer" class="container">
		<div class="row">
			<div id="footer-contact" class="col-md-3 col-sm-6">
				<h6>Contact Us</h6>
				<?php
					echo do_shortcode ( '[easy_options id="address"]' );
					$phone = do_shortcode ( '[easy_options id="phone"]' );
				?>
				<a href="tel:<?php echo $phone; ?>">Call:
					<span class="number" style="padding: 0;margin: 0;"><?php echo $phone; ?></span></a>
			</div>
			<div class="col-md-3 col-sm-6 footer-menu">
				<h6>Industries</h6>
				<?php wp_nav_menu ( array ( 'theme_location' => 'footer-industries-menu' ) ); ?>
			</div>
			<div class="col-md-3 col-sm-6 footer-menu">
				<h6>Quick Links</h6>
				<?php wp_nav_menu ( array ( 'theme_location' => 'footer-generic-menu' ) ); ?>
			</div>
			<div id="footer-community" class="col-md-3 col-sm-6 footer-menu">
				<h6>SYS Community</h6>
				<?php wp_nav_menu ( array ( 'theme_location' => 'social-menu' ) ); ?>
			</div>
		</div>
	</section>
	<section id="lower-footer">
		<section class="container">
			<div class="row">
				<div id="lower-footer-menu" class="col-sm-8">
					<p>&copy; <?php echo do_shortcode ( '[easy_options id="name"]' );
							echo " ";
							echo date ( Y ); ?></p>
					<?php wp_nav_menu ( array ( 'theme_location' => 'lower-footer-menu' ) ); ?>
				</div>
				<div id="lower-footer-carfulan" class="col-sm-4">
					<a href="http://carfulan.com" title="Visit the Carfulan Group" target="_blank">
						<p>A Carfulan Group Company</p>
						<img src="<?php echo get_template_directory_uri (); ?>/assets/images/carfulan-group-logo.png" alt="Carfulan Group Logo">
					</a>
				</div>
			</div>
		</section>
	</section>
</footer>
</div> <!-- end of fade -->
</div> <!-- end body class -->
</div> <!-- end smoothstate -->
<?php wp_footer (); ?>
</body>
</html>
