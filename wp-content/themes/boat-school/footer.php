<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boat_School
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<!-- <a href="<?php echo esc_url(__('https://wordpress.org/', 'boat-school')); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf(esc_html__('Proudly powered by %s', 'boat-school'), 'WordPress');
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf(esc_html__('Theme: %1$s by %2$s.', 'boat-school'), 'boat-school', '<a href="http://underscores.me/">Underscores.me</a>');
				?> -->
		<div class="footer-grid">
			<div class="usefull-info">
				<div class="info-footer">
					<div class="info-footer-title">
						Adresse
					</div>
					<div class="info-footer-content">
						<div>Quai de la Mairie 1</div>
						<div>1422 Grandson</div>
					</div>
				</div>
				<div class="info-footer">
					<div class="info-footer-title">
						Téléphone
					</div>
					<div class="info-footer-content">
						+41 24 123 45 67
					</div>
				</div>

	
			</div>

			<div class="copyright">
				<p>© 2026 Grandson Voile. Tous droits réservés.</p>
			</div>
			<!-- -- -->

			<!-- -- -->
			<div class="usefull-links">
				<a href="https://www.vd.ch/mobilite/navigation">Service Cantonale de la Navigation</a>
				<a href="https://www.meteosuisse.admin.ch/#tab=forecast-map">Météo Suisse</a>
				<a href="https://www.yvbeach.com/yvmeteo.htm">YvBeach | Station météo d'Yvonnand</a>
			</div>
		</div>


	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>