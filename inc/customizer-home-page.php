<?php
	function arcandia_customize_register_home_page($wp_customize){

		/*
		***********************************************
			PANEL HOME PAGE
		***********************************************
		*/
		$wp_customize->add_panel('panel-home-page', array(
            'title' => 'HOME PAGE ARCANDIA',
            'priority' => 2,
            )
        );

		/*
		***********************************************
			SECTION SLIDER
		***********************************************
		*/
		$wp_customize->add_section('slider', array(
			'title'			=> __('SLIDER', 'arcandiarecords-shop'),
			'description'	=> sprintf(__('Diaporama de la home page', 'arcandiarecords-shop')),
			'priority'		=> 1,
			'panel' => 'panel-home-page'
		));
		
		// *********************
		// SLIDE 1 - DESCRIPTION
		$wp_customize->add_setting('slide1_description', array(
			'default' 		=> _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit.','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide1_description', array(
			'label' 		=> __('Slide 1 - Description', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'slide1_description', array(
	        'selector' => '.caption-text',
    	) );


    	// SLIDE 1 - TEXTE BOUTON
		$wp_customize->add_setting('slide1_btn_texte', array(
			'default' 		=> _x('En savoir +','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide1_btn_texte', array(
			'label' 		=> __('Slide 1 - Texte du bouton', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		$wp_customize->selective_refresh->add_partial( 'slide1_btn_texte', array(
	        'selector' => '.caption-cta',
    	) );


    	// SLIDE 1 - LIEN BOUTON
		$wp_customize->add_setting('slide1_btn_url', array(
			'default' 		=> _x('#','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide1_btn_url', array(
			'label' 		=> __('Slide 1 - Lien du bouton', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 3
		));


		// SLIDE 1 - IMG
		$wp_customize->add_setting('slide1_img', array(
			'default'		=> get_stylesheet_directory_uri().'/img/bandeau1.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide1_img', array(
			'label'			=> __('Slide 1 - IMG : 1275px sur 360px', 'arcandiarecords-shop'),
			'section'		=> 'slider',
			'settings'		=> 'slide1_img',
			'priority'		=> 4
		)));

		// *********************
		// SLIDE 2 - DESCRIPTION
		$wp_customize->add_setting('slide2_description', array(
			'default' 		=> _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit.','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide2_description', array(
			'label' 		=> __('Slide 2 - Description', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 5
		));


    	// SLIDE 2 - TEXTE BOUTON
		$wp_customize->add_setting('slide2_btn_texte', array(
			'default' 		=> _x('En savoir +','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide2_btn_texte', array(
			'label' 		=> __('Slide 2 - Texte du bouton', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 6
		));



    	// SLIDE 2 - LIEN BOUTON
		$wp_customize->add_setting('slide2_btn_url', array(
			'default' 		=> _x('#','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide2_btn_url', array(
			'label' 		=> __('Slide 2 - Lien du bouton', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 7
		));


		// SLIDE 2 - IMG
		$wp_customize->add_setting('slide2_img', array(
			'default'		=> get_stylesheet_directory_uri().'/img/bandeau1.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide2_img', array(
			'label'			=> __('Slide 2 - IMG : 1275px sur 360px', 'arcandiarecords-shop'),
			'section'		=> 'slider',
			'settings'		=> 'slide2_img',
			'priority'		=> 8
		)));


		// *********************
		// SLIDE 3 - DESCRIPTION
		$wp_customize->add_setting('slide3_description', array(
			'default' 		=> _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit.','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide3_description', array(
			'label' 		=> __('Slide 3 - Description', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 9
		));


    	// SLIDE 3 - TEXTE BOUTON
		$wp_customize->add_setting('slide3_btn_texte', array(
			'default' 		=> _x('En savoir +','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide3_btn_texte', array(
			'label' 		=> __('Slide 3 - Texte du bouton', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 10
		));



    	// SLIDE 3 - LIEN BOUTON
		$wp_customize->add_setting('slide3_btn_url', array(
			'default' 		=> _x('#','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('slide3_btn_url', array(
			'label' 		=> __('Slide 3 - Lien du bouton', 'arcandiarecords-shop'),
			'section' 		=> 'slider',
			'type' 			=> 'text',
			'priority' 		=> 11
		));


		// SLIDE 3 - IMG
		$wp_customize->add_setting('slide3_img', array(
			'default'		=> get_stylesheet_directory_uri().'/img/bandeau1.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide3_img', array(
			'label'			=> __('Slide 3 - IMG : 1275px sur 360px', 'arcandiarecords-shop'),
			'section'		=> 'slider',
			'settings'		=> 'slide3_img',
			'priority'		=> 12
		)));



		/*
		***********************************************
			SECTION TITRES
		***********************************************
		*/
		$wp_customize->add_section('home_titres', array(
			'title'			=> __('TITRES', 'arcandiarecords-shop'),
			'description'	=> sprintf(__('Titres de la home page', 'arcandiarecords-shop')),
			'priority'		=> 2,
			'panel' => 'panel-home-page'
		));


		// TITRE 1
		$wp_customize->add_setting('home_titre1', array(
			'default' 		=> _x('Albums Mont-Saint-Michel','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('home_titre1', array(
			'label' 		=> __('Titre 1', 'arcandiarecords-shop'),
			'section' 		=> 'home_titres',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'home_titre1', array(
	        'selector' => '#home-titre1',
    	) );

		
	}
	add_action('customize_register', 'arcandia_customize_register_home_page');
