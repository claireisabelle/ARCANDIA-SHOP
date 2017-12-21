<?php
	function arcandia_customize_register_header($wp_customize){

		/*
		***********************************************
			PANEL HEADER
		***********************************************
		*/
		$wp_customize->add_panel('panel-header', array(
            'title' => 'HEADER ARCANDIA',
            'priority' => 1,
            )
        );

		/*
		***********************************************
			SECTION LANGUE
		***********************************************
		*/
		$wp_customize->add_section('langue', array(
			'title'			=> __('LANGUE', 'arcandiarecords-shop'),
			'description'	=> sprintf(__('Lien vers la version traduite du site', 'arcandiarecords-shop')),
			'priority'		=> 1,
			'panel' => 'panel-header'
		));


		// TITRE DE LA LANGUE
		$wp_customize->add_setting('langue_titre', array(
			'default' 		=> _x('English','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('langue_titre', array(
			'label' 		=> __('Intitulé', 'arcandiarecords-shop'),
			'section' 		=> 'langue',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'langue_titre', array(
	        'selector' => '#langue-titre',
    	) );


		// URL DE LA LANGUE
		$wp_customize->add_setting('langue_url', array(
			'default' 		=> _x('#','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('langue_url', array(
			'label' 		=> __('URL de la version traduite', 'arcandiarecords-shop'),
			'section' 		=> 'langue',
			'type' 			=> 'text',
			'priority' 		=> 2
		));


		/*
		***********************************************
			SECTION BANDEAU
		***********************************************
		*/
		$wp_customize->add_section('bandeau', array(
			'title'			=> __('BANDEAU', 'arcandiarecords-shop'),
			'description'	=> sprintf(__('Eléments du bandeau en en-tête', 'arcandiarecords-shop')),
			'priority'		=> 2,
			'panel' => 'panel-header'
		));


		// LIGNE 1
		$wp_customize->add_setting('bandeau_ligne1', array(
			'default' 		=> _x('Concerts de musique classique au Mont-Saint-Michel','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod',
		));

		$wp_customize->add_control('bandeau_ligne1', array(
			'label' 		=> __('Texte ligne 1', 'arcandiarecords-shop'),
			'section' 		=> 'bandeau',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'bandeau_ligne1', array(
	        'selector' => '#ligne1',
    	) );


    	// LIGNE 2
		$wp_customize->add_setting('bandeau_ligne2', array(
			'default' 		=> _x('Albums CD d\'enregistrements exclusifs réalisés au coeur de l\'Abbaye','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod',
		));

		$wp_customize->add_control('bandeau_ligne2', array(
			'label' 		=> __('Texte ligne 2', 'arcandiarecords-shop'),
			'section' 		=> 'bandeau',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		$wp_customize->selective_refresh->add_partial( 'bandeau_ligne2', array(
	        'selector' => '#ligne2',
    	) );


    	// LOGO
		$wp_customize->add_setting('bandeau_logo', array(
			'default'		=> get_stylesheet_directory_uri().'/img/logo-arcandia.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bandeau_logo', array(
			'label'			=> __('Logo : 120px de large', 'arcandiarecords-shop'),
			'section'		=> 'bandeau',
			'settings'		=> 'bandeau_logo',
			'priority'		=> 3
		)));

		$wp_customize->selective_refresh->add_partial( 'bandeau_logo', array(
	        'selector' => '.logo',
    	) );


    	/*
		***********************************************
			SECTION PANIER
		***********************************************
		*/
		$wp_customize->add_section('panier', array(
			'title'			=> __('PANIER BTN', 'arcandiarecords-shop'),
			'description'	=> sprintf(__('Bouton Panier du bandeau', 'arcandiarecords-shop')),
			'priority'		=> 3,
			'panel' => 'panel-header'
		));


		// TITRE BTN
		$wp_customize->add_setting('panier_btn_titre', array(
			'default' 		=> _x('Mon Panier','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('panier_btn_titre', array(
			'label' 		=> __('Intitulé du bouton', 'arcandiarecords-shop'),
			'section' 		=> 'panier',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'panier_btn_titre', array(
	        'selector' => '.navbar-brand',
    	) );


		// URL BTN
		$wp_customize->add_setting('panier_btn_url', array(
			'default' 		=> _x('#','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('panier_btn_url', array(
			'label' 		=> __('URL du panier', 'arcandiarecords-shop'),
			'section' 		=> 'panier',
			'type' 			=> 'text',
			'priority' 		=> 2
		));


	}


	add_action('customize_register', 'arcandia_customize_register_header');