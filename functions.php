<?php

	add_filter ( 'tiny_mce_before_init', 'override_mce_options' );
	add_filter ( 'excerpt_more', 'custom_excerpt_more' );

	add_action ( 'init', 'register_custom_post_types' );
	add_action ( 'wp_enqueue_scripts', 'theme_scripts' );

	add_theme_support ( 'post-thumbnails' );

	add_image_size ( 'slider-image', 1920, 400, true );

	register_nav_menu ( 'main-menu', 'Main Menu' );
	register_nav_menu ( 'footer-generic-menu', 'Footer Generic Menu' );
	register_nav_menu ( 'footer-industries-menu', 'Footer Industries Menu' );
	register_nav_menu ( 'lower-footer-menu', 'Lower Footer Menu' );
	register_nav_menu ( 'social-menu', 'Social Menu' );

	wp_enqueue_script ( $handle, $src, $deps, $ver, $in_footer );

	/*
	* Below are the functions called above, simple!!
	*/

	/*
	* This function enqueues all theme scripts and styles.
	* Note, scripts are called to the footer
	*/
	function theme_scripts ()
	{
		wp_enqueue_style ( 'main-css', get_template_directory_uri () . '/assets/stylesheets/main.css' );
		wp_enqueue_script ( 'main-js', get_template_directory_uri () . '/assets/javascripts/build.js', array ( 'jquery' ), '1.0.0', true );
	}

	/*
	* This function attempts to stop that stupid tinymce
	* messing with html tags in posts etc..
	*/
	function override_mce_options ( $initArray )
	{
		$opts                                   = '*[*]';
		$initArray[ 'valid_elements' ]          = $opts;
		$initArray[ 'extended_valid_elements' ] = $opts;

		return $initArray;
	}

	/*
	* This function changes the read more text on post excerpts
	*/
	function custom_excerpt_more ( $more )
	{
		global $post;

		return '...';
	}

	/*
	* This function make an excerpt for the custom field "overview",
	* the overview field is used by materials and 3d printers custom post types
	*/
	function custom_field_excerpt ()
	{
		global $post;
		$text = get_field ( 'overview' );
		if ( '' != $text )
		{
			$text           = strip_shortcodes ( $text );
			$text           = apply_filters ( 'the_content', $text );
			$text           = str_replace ( ']]>', ']]>', $text );
			$excerpt_length = 15; // 15 words
			$excerpt_more   = apply_filters ( 'excerpt_more', ' ' . '[...]' );
			$text           = wp_trim_words ( $text, $excerpt_length, $excerpt_more );
		}

		return apply_filters ( 'the_excerpt', $text );
	}

	/*
	* This function registers all of the custom post types
	*/
	function register_custom_post_types ()
	{

		/*
		* Registration of 3D Printers CPT
		*/
		$labels = array (
			"name"          => "3D Printers",
			"singular_name" => "3D Printer",
		);

		$args = array (
			"labels"              => $labels,
			"description"         => "",
			"public"              => true,
			"menu_icon"           => "dashicons-tagcloud",
			"show_ui"             => true,
			"has_archive"         => false,
			"show_in_menu"        => true,
			"exclude_from_search" => false,
			"capability_type"     => "post",
			"map_meta_cap"        => true,
			"hierarchical"        => false,
			"rewrite"             => array ( "slug" => "3d-printers", "with_front" => true ),
			"query_var"           => true,
			"supports"            => array ( "title", "thumbnail", "revisions" ),
			"taxonomies"          => array ( "category" )
		);

		register_post_type ( "3d-printers", $args );

		/*
		* Registration of Materials CPT
		*/
		$labels = array (
			"name"          => "Materials",
			"singular_name" => "Material",
		);

		$args = array (
			"labels"              => $labels,
			"description"         => "",
			"public"              => true,
			"show_ui"             => true,
			"menu_icon"           => "dashicons-image-filter",
			"has_archive"         => false,
			"show_in_menu"        => true,
			"exclude_from_search" => false,
			"capability_type"     => "post",
			"map_meta_cap"        => true,
			"hierarchical"        => false,
			"rewrite"             => array ( "slug" => "materials", "with_front" => true ),
			"query_var"           => true,
			"supports"            => array ( "title", "thumbnail", "revisions" ),
			"taxonomies"          => array ( "category" )
		);

		register_post_type ( "materials", $args );

		/*
		* Registration of News CPT
		*/
		$labels = array (
			"name"          => "News",
			"singular_name" => "News",
		);

		$args = array (
			"labels"              => $labels,
			"description"         => "",
			"public"              => true,
			"menu_icon"           => "dashicons-format-aside",
			"show_ui"             => true,
			"has_archive"         => false,
			"show_in_menu"        => true,
			"exclude_from_search" => false,
			"capability_type"     => "post",
			"map_meta_cap"        => true,
			"hierarchical"        => false,
			"rewrite"             => array ( "slug" => "news", "with_front" => true ),
			"query_var"           => true,
			"supports"            => array ( "title", "editor", "thumbnail" ),
		);

		register_post_type ( "news", $args );

		/*
		* Registration of Slides CPT
		*/
		$labels = array (
			"name"          => "Slides",
			"singular_name" => "Slide",
		);

		$args = array (
			"labels"              => $labels,
			"description"         => "",
			"menu_icon"           => "dashicons-images-alt2",
			"public"              => true,
			"show_ui"             => true,
			"has_archive"         => false,
			"show_in_menu"        => true,
			"exclude_from_search" => true,
			"capability_type"     => "post",
			"map_meta_cap"        => true,
			"hierarchical"        => false,
			"rewrite"             => array ( "slug" => "slides", "with_front" => true ),
			"query_var"           => true,
			"supports"            => array ( "title" ),
		);

		register_post_type ( "slides", $args );

		/*
		* Registration of Events CPT
		*/
		$labels = array (
			"name"          => "Events",
			"singular_name" => "Event",
		);

		$args = array (
			"labels"              => $labels,
			"description"         => "",
			"public"              => true,
			"show_ui"             => true,
			"menu_icon"           => "dashicons-calendar-alt",
			"has_archive"         => false,
			"show_in_menu"        => true,
			"exclude_from_search" => false,
			"capability_type"     => "post",
			"map_meta_cap"        => true,
			"hierarchical"        => false,
			"rewrite"             => array ( "slug" => "events", "with_front" => true ),
			"query_var"           => true,
			"supports"            => array ( "title", "thumbnail" ),
		);

		register_post_type ( "events", $args );

		/*
		* Registration of Case Studies CPT
		*/
		$labels = array (
			"name"          => "Case Studies",
			"singular_name" => "Case Study",
		);

		$args = array (
			"labels"              => $labels,
			"description"         => "",
			"public"              => true,
			"taxonomies"          => array ( 'category' ),
			"show_ui"             => true,
			"menu_icon"           => "dashicons-analytics",
			"has_archive"         => false,
			"show_in_menu"        => true,
			"exclude_from_search" => false,
			"capability_type"     => "post",
			"map_meta_cap"        => true,
			"hierarchical"        => false,
			"rewrite"             => array ( "slug" => "case-studies", "with_front" => true ),
			"query_var"           => true,
			"supports"            => array ( "title", "editor", "thumbnail" ),
		);

		register_post_type ( "case-studies", $args );

		/*
		* Registration of White Papers CPT
		*/
		$labels = array (
			'name'          => __ ( 'White Papers', 'text-domain' ),
			'singular_name' => __ ( 'White Paper', 'text-domain' ),
		);

		$args = array (
			'labels'              => $labels,
			'hierarchical'        => false,
			'taxonomies'          => array (),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-media-document',
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array (
				'title', 'editor', 'author', 'thumbnail',
				'excerpt', 'custom-fields', 'trackbacks', 'comments',
				'revisions', 'page-attributes', 'post-formats'
			)
		);

		register_post_type ( 'white-papers', $args );

	} /* end of register_custom_post_types() */
