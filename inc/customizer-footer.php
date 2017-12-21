<?php
	function arcandia_customize_register_footer($wp_customize){

		/*
		***********************************************
			PANEL FOOTER
		***********************************************
		*/
		$wp_customize->add_panel('panel-footer', array(
            'title' => 'FOOTER ARCANDIA',
            'priority' => 3,
            )
        );

		/*
		***********************************************
			SECTION FOOTER 1
		***********************************************
		*/
		$wp_customize->add_section('footer1', array(
			'title'			=> __('FOOTER 1', 'arcandiarecords-shop'),
			'description'	=> sprintf(__('Encarts argumentaires', 'arcandiarecords-shop')),
			'priority'		=> 1,
			'panel' => 'panel-footer'
		));


		// LIGNE 1
		$wp_customize->add_setting('footer1_ligne1', array(
			'default' 		=> _x('Paiement sécurisé','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_ligne1', array(
			'label' 		=> __('Ligne 1', 'arcandiarecords-shop'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_ligne1', array(
	        'selector' => '#footer1-ligne1',
    	) );


    	// LIGNE 2
		$wp_customize->add_setting('footer1_ligne2', array(
			'default' 		=> _x('Achat par carte bancaire ou Paypal','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_ligne2', array(
			'label' 		=> __('Ligne 2', 'arcandiarecords-shop'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_ligne2', array(
	        'selector' => '#footer1-ligne2',
    	) );


    	// LIGNE 3
		$wp_customize->add_setting('footer1_ligne3', array(
			'default' 		=> _x('Commande expédiée sous 24h00','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_ligne3', array(
			'label' 		=> __('Ligne 3', 'arcandiarecords-shop'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_ligne3', array(
	        'selector' => '#footer1-ligne3',
    	) );


    	// LABEL LIGNE 1
		$wp_customize->add_setting('footer1_label_ligne1', array(
			'default' 		=> _x('ARCANDIA RECORDS','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_label_ligne1', array(
			'label' 		=> __('Label, ligne 1', 'arcandiarecords-shop'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_label_ligne1', array(
	        'selector' => '#label-ligne1',
    	) );


    	// LABEL LIGNE 2
		$wp_customize->add_setting('footer1_label_ligne2', array(
			'default' 		=> _x('Label Musical depuis','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_label_ligne2', array(
			'label' 		=> __('Label, ligne 2', 'arcandiarecords-shop'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 5
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_label_ligne2', array(
	        'selector' => '#label-ligne2',
    	) );


    	// LABEL LIGNE 3
		$wp_customize->add_setting('footer1_label_ligne3', array(
			'default' 		=> _x('1991','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_label_ligne3', array(
			'label' 		=> __('Label, ligne 3', 'arcandiarecords-shop'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_label_ligne3', array(
	        'selector' => '#label-ligne3',
    	) );



		/*
		***********************************************
			SECTION FOOTER 2
		***********************************************
		*/
		$wp_customize->add_section('footer2', array(
			'title'			=> __('FOOTER 2', 'arcandiarecords-shop'),
			'description'	=> sprintf(__('Bandeau de coordonnées', 'arcandiarecords-shop')),
			'priority'		=> 2,
			'panel' => 'panel-footer'
		));


		// TITRE
		$wp_customize->add_setting('footer2_titre', array(
			'default' 		=> _x('Coordonnées','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer2_titre', array(
			'label' 		=> __('Titre', 'arcandiarecords-shop'),
			'section' 		=> 'footer2',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'footer2_titre', array(
	        'selector' => '#footer2-titre',
    	) );


    	// ADRESSE
		$wp_customize->add_setting('footer2_adresse', array(
			'default' 		=> _x('ARCANDIA RECORDS C/o AngloNormandy Ltd<br />
		100, Pall Mall, St. James<br />London SW1Y 5NQ<br />Royaume Uni','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer2_adresse', array(
			'label' 		=> __('Adresse', 'arcandiarecords-shop'),
			'section' 		=> 'footer2',
			'type' 			=> 'textarea',
			'priority' 		=> 2
		));

		$wp_customize->selective_refresh->add_partial( 'footer2_adresse', array(
	        'selector' => '#footer2-adresse',
    	) );


    	// TELEPHONE
		$wp_customize->add_setting('footer2_tel', array(
			'default' 		=> _x('+44 (0)203 432 59 84','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer2_tel', array(
			'label' 		=> __('Telephone', 'arcandiarecords-shop'),
			'section' 		=> 'footer2',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		$wp_customize->selective_refresh->add_partial( 'footer2_tel', array(
	        'selector' => '#footer2-tel',
    	) );


    	// EMAIL
		$wp_customize->add_setting('footer2_email', array(
			'default' 		=> _x('info@arcandiarecords.com','arcandiarecords-shop'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer2_email', array(
			'label' 		=> __('E-mail', 'arcandiarecords-shop'),
			'section' 		=> 'footer2',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

		$wp_customize->selective_refresh->add_partial( 'footer2_email', array(
	        'selector' => '#footer2-email',
    	) );
		

		// LOGO
		$wp_customize->add_setting('footer2_logo', array(
			'default'		=> get_stylesheet_directory_uri().'/img/logo-msm-fr.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer2_logo', array(
			'label'			=> __('Logo : 250px de large', 'arcandiarecords-shop'),
			'section'		=> 'footer2',
			'settings'		=> 'footer2_logo',
			'priority'		=> 5
		)));



	}


	add_action('customize_register', 'arcandia_customize_register_footer');