<?php get_header(); ?>


	<section id="slider" class="container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="<?php echo get_theme_mod('slide1_img', get_stylesheet_directory_uri().'/img/bandeau1.jpg'); ?>" alt="First slide">
					<div class="carousel-caption d-none d-sm-block">
						<div class="caption-wrapper">
							<div class="caption-text">
								<a href="<?php echo get_theme_mod('slide1_btn_url', '#'); ?>"><?php echo get_theme_mod('slide1_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?></a>
							</div>
							<!-- /.caption-text -->

							<div class="caption-cta">
								<a href="<?php echo get_theme_mod('slide1_btn_url', '#'); ?>"><?php echo get_theme_mod('slide1_btn_texte', 'En savoir +'); ?> </a>
							</div>
							<!-- /.caption-cta -->
						</div>
						<!-- /.caption-wrapper -->
					</div><!-- /.carousel-caption -->
				</div><!-- /.carousel-item -->

				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_theme_mod('slide2_img', get_stylesheet_directory_uri().'/img/bandeau1.jpg'); ?>" alt="Second slide">
					<div class="carousel-caption d-none d-sm-block">
						<div class="caption-wrapper">
							<div class="caption-text">
								<a href="<?php echo get_theme_mod('slide2_btn_url', '#'); ?>"><?php echo get_theme_mod('slide2_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?></a>
							</div>
							<!-- /.caption-text -->

							<div class="caption-cta">
								<a href="<?php echo get_theme_mod('slide2_btn_url', '#'); ?>"><?php echo get_theme_mod('slide2_btn_texte', 'En savoir +'); ?></a>
							</div>
							<!-- /.caption-cta -->
						</div>
						<!-- /.caption-wrapper -->
					</div><!-- /.carousel-caption -->
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_theme_mod('slide3_img', get_stylesheet_directory_uri().'/img/bandeau1.jpg'); ?>" alt="Third slide">
					<div class="carousel-caption d-none d-sm-block">
						<div class="caption-wrapper">
							<div class="caption-text">
								<a href="<?php echo get_theme_mod('slide3_btn_url', '#'); ?>"><?php echo get_theme_mod('slide3_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?></a>
							</div>
							<!-- /.caption-text -->

							<div class="caption-cta">
								<a href="<?php echo get_theme_mod('slide3_btn_url', '#'); ?>"><?php echo get_theme_mod('slide3_btn_texte', 'En savoir +'); ?></a>
							</div>
							<!-- /.caption-cta -->
						</div>
						<!-- /.caption-wrapper -->
					</div><!-- /.carousel-caption -->
				</div>
			</div>
	
		</div>
	</section>

	<section id="produits-msm" class="container-fluid">
		<h2 id="home-titre1"><?php echo get_theme_mod('home_titre1', 'Albums Mont-Saint-Michel'); ?></h2>

		<div class="wrapper-produits-msm">

		<?php
			$params = array('posts_per_page' => 4, 'post_type' => 'product', array('category_name' => 'mont-saint-michel'));
			$wc_query = new WP_Query($params);
		?>
		<?php if ($wc_query->have_posts()) : ?>
			
			<?php while ($wc_query->have_posts()) : $wc_query->the_post(); ?>

				<?php 
					$product = new WC_Product(get_the_ID());
					$thetitle = get_the_title();
				?>
				
				<div class="produit-front">
					<h3><?php echo substr($thetitle, 0, 38); ?></h3>

					<h4><?php echo $product->get_price_html(); ?></h4>
					<div class="produit-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div><!-- /.produit-img -->
					<p><a href="<?php the_permalink(); ?>"><?php _e('En savoir +' , 'arcandiarecords'); ?></a></p>

				</div>
				<!-- /.produit -->

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else:  ?>
			<p>
			<?php _e( 'No Products'); ?>
			</p>
		<?php endif; ?>
			
			

			
		</div>
		<!-- /.wrapper-produits-msm -->
	</section>
	

<?php get_footer(); ?>
