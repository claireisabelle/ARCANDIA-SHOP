<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

</div><!-- #page -->

<section id="encart-mentions">
		<div class="mentions-securite">
			<p id="footer1-ligne1"><i class="fa fa-lock" aria-hidden="true"></i> <?php echo get_theme_mod('footer1_ligne1', 'Paiement sécurisé'); ?></p>
			<p id="footer1-ligne2"><i class="fa fa-credit-card" aria-hidden="true"></i> <?php echo get_theme_mod('footer1_ligne2', 'Achat par carte bancaire ou Paypal'); ?></p>
			<p id="footer1-ligne3"><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo get_theme_mod('footer1_ligne3', 'Commande expédiée sous 24h00'); ?></p>
		</div>
			<!-- /.mentions-securite -->

		<div class="mentions-label">
			<h2 id="label-ligne1"><?php echo get_theme_mod('footer1_label_ligne1', 'Arcandia Records'); ?></h2>
			<h3 id="label-ligne2"><?php echo get_theme_mod('footer1_label_ligne2', 'Label Musical depuis'); ?></h3>
			<h4 id="label-ligne3"><?php echo get_theme_mod('footer1_label_ligne3', '1991'); ?></h4>
		</div>
			<!-- /.mentions-label -->	
	</section>
	
	<footer>
		<div class="footer-01">
			<div class="footer-menu">
				<?php
					wp_nav_menu( array(
					'theme_location'    => 'footer',
					'depth'             => 1,
					));
				?>
			</div>
			<!-- /.footer-menu -->

			<div class="footer-coordonates">
				<h2 id="footer2-titre"><?php echo get_theme_mod('footer2_titre', 'Coordonnées'); ?></h2>
				<p id="footer2-adresse">
					<?php echo get_theme_mod('footer2_adresse', 'ARCANDIA RECORDS C/o AngloNormandy Ltd<br />
					100, Pall Mall, St. James<br />
					London SW1Y 5NQ <br />
					Royaume Uni'); ?>
				</p>
				<p id="footer2-tel"><?php echo get_theme_mod('footer2_tel', '+44 (0)203 432 59 84'); ?></p>
				<p id="footer2-email"><a href="mailto:<?php echo get_theme_mod('footer2_email', 'info@arcandiarecords.com'); ?>"><?php echo get_theme_mod('footer2_email', 'info@arcandiarecords.com'); ?></a></p>
			</div>
			<!-- /.footer-coordonates -->
		</div>
		<!-- /.footer-01 -->

		<div class="footer-02">
			<?php
					wp_nav_menu( array(
					'theme_location'    => 'mentions-legales',
					'depth'             => 1,
					));
			?>
		</div>
		<!-- /.footer-02 -->
	</footer>

	


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<?php wp_footer(); ?>

</body>
</html>




