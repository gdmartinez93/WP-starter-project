<?php
	global $project_options;
	$phone = $project_options['general_settings_contact_phone'];
	$email = $project_options['general_settings_contact_mail'];
	$address = $project_options['general_settings_contact_address'];
	$facebook = $project_options['general_settings_social_facebook'];
	$instagram = $project_options['general_settings_social_instagram'];
?>
		</main>
	</div>

	<?php // do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="footer <?php if (is_front_page()) { echo 'is-home'; } ?>" role="contentinfo">
		<div class="footer__subscribe">
			<div class="container">
				<div class="grid">
					<div class="form-subscribe col-6_xs-12">
						<h3>SUSCRÍBETE A NUESTROS BOLETINES POR EMAIL</h3>
						<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
					</div>
					<div class="social-media col-6_xs-12">
						<h3>MÁS FORMAS DE CONTACTO</h3>

						<a href="<?php echo $facebook; ?>">
							<svg id="footer-facebok--footer" data-name="Top bar facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.97 18.66">
								<path class="cls-1" d="M9.41.17H7.12C4.54.16,2.87,1.94,2.87,4.69V6.78H.56a.37.37,0,0,0-.36.38v3a.37.37,0,0,0,.36.37H2.87V18.2a.37.37,0,0,0,.36.38h3a.37.37,0,0,0,.36-.38V10.56H9.3a.37.37,0,0,0,.36-.37v-3a.39.39,0,0,0-.11-.27.36.36,0,0,0-.26-.11H6.6V5c0-.85.2-1.28,1.27-1.28H9.41a.37.37,0,0,0,.36-.38V.54A.36.36,0,0,0,9.41.17Z"/>
							</svg>
						</a>
						<a href="<?php echo $instagram; ?>">
							<svg version="1.1" id="footer-instagram--footer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.395px" height="97.395px" viewBox="0 0 97.395 97.395" style="enable-background:new 0 0 97.395 97.395;" xml:space="preserve">
								<g>
								<path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
									V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
									h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
									c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
									c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
									H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
									c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
								</g>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="footer__menu">
			<div class="container">
				<div class="grid">
					<div class="col-4_xs-12">
						<h3>Nuestra empresa</h3>
						<?php wp_nav_menu( array( 'menu' => 'menu-company' ) ) ?>
					</div>

					<div class="col-4_xs-12">
						<h3>Pago y envios</h3>
						<?php wp_nav_menu( array( 'menu' => 'menu-payments-shipping' ) ) ?>
					</div>

					<div class="contact col-4_xs-12">
						<h3>Contacto</h3>
						<ul>
							<li><a href="">
								<svg id="footer-phone-contact-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.53 23.83">
									<path class="cls-1" d="M13.08.25H1.42A1.17,1.17,0,0,0,.25,1.42v21a1.17,1.17,0,0,0,1.17,1.17H13.08a1.17,1.17,0,0,0,1.17-1.17v-21A1.17,1.17,0,0,0,13.08.25Zm.39,3.11H4.53a.39.39,0,0,0-.39.39.38.38,0,0,0,.39.39h8.94V19.31H12.31a.38.38,0,0,0-.39.39.39.39,0,0,0,.39.39h1.16v2.33a.39.39,0,0,1-.39.39H1.42A.39.39,0,0,1,1,22.42V20.09H10a.39.39,0,0,0,.39-.39.38.38,0,0,0-.39-.39H1V4.14H2.19a.38.38,0,0,0,.39-.39.39.39,0,0,0-.39-.39H1V1.42A.38.38,0,0,1,1.42,1H13.08a.38.38,0,0,1,.39.39Z"/>
									<path class="cls-1" d="M7.64,21.25H6.86a.4.4,0,0,0-.39.39.39.39,0,0,0,.39.39h.78A.39.39,0,0,0,8,21.64.4.4,0,0,0,7.64,21.25Z"/>
								</svg>
								<?php echo $phone; ?>
							</a></li>

							<li><a href="">
								<svg id="footer-address-contact-icon" data-name="Layer Footer Address" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.47 33.08">
									<path class="cls-1" d="M10.71.13A10.63,10.63,0,0,0,.09,10.75c0,5.23,3.63,12.1,6.68,16.93A.67.67,0,1,0,7.9,27C2.55,18.48,1.43,13.46,1.43,10.75a9.28,9.28,0,0,1,18.56,0c0,8.31-9.71,21-9.81,21.11a.67.67,0,0,0,.12.93.64.64,0,0,0,.41.14.67.67,0,0,0,.53-.26c.41-.53,10.09-13.15,10.09-21.92A10.65,10.65,0,0,0,10.71.13Z"/>
									<path class="cls-1" d="M10.71,7.36a.66.66,0,0,0,.67-.66A.67.67,0,0,0,10.71,6a4.72,4.72,0,1,0,4.72,4.72,4.64,4.64,0,0,0-1-2.85.67.67,0,1,0-1.06.81,3.32,3.32,0,0,1,.68,2,3.39,3.39,0,1,1-3.38-3.39Z"/>
								</svg>
								<?php echo $address; ?>
							</a></li>

							<li><a href="">
								<svg version="1.1" id="footer-contact-mail-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.012 31.012" style="enable-background:new 0 0 31.012 31.012;" xml:space="preserve">
									<g>
										<g>
											<path d="M25.109,21.51c-0.123,0-0.246-0.045-0.342-0.136l-5.754-5.398c-0.201-0.188-0.211-0.505-0.022-0.706
												c0.189-0.203,0.504-0.212,0.707-0.022l5.754,5.398c0.201,0.188,0.211,0.505,0.022,0.706C25.375,21.457,25.243,21.51,25.109,21.51z
												"/>
											<path d="M5.902,21.51c-0.133,0-0.266-0.053-0.365-0.158c-0.189-0.201-0.179-0.518,0.022-0.706l5.756-5.398
												c0.202-0.188,0.519-0.18,0.707,0.022c0.189,0.201,0.179,0.518-0.022,0.706l-5.756,5.398C6.148,21.465,6.025,21.51,5.902,21.51z"/>
										</g>
										<path d="M28.512,26.529H2.5c-1.378,0-2.5-1.121-2.5-2.5V6.982c0-1.379,1.122-2.5,2.5-2.5h26.012c1.378,0,2.5,1.121,2.5,2.5v17.047
											C31.012,25.408,29.89,26.529,28.512,26.529z M2.5,5.482c-0.827,0-1.5,0.673-1.5,1.5v17.047c0,0.827,0.673,1.5,1.5,1.5h26.012
											c0.827,0,1.5-0.673,1.5-1.5V6.982c0-0.827-0.673-1.5-1.5-1.5H2.5z"/>
										<path d="M15.506,18.018c-0.665,0-1.33-0.221-1.836-0.662L0.83,6.155C0.622,5.974,0.6,5.658,0.781,5.449
											c0.183-0.208,0.498-0.227,0.706-0.048l12.84,11.2c0.639,0.557,1.719,0.557,2.357,0L29.508,5.419
											c0.207-0.181,0.522-0.161,0.706,0.048c0.181,0.209,0.16,0.524-0.048,0.706L17.342,17.355
											C16.835,17.797,16.171,18.018,15.506,18.018z"/>
									</g>
								</svg>
								email: <?php echo $email; ?>
							</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="footer__copyright">
			<div class="container">
				<p>
					Copyright © <?php echo date("Y"); ?> Store Theme. Powered by <a href="http://agathos.technology">Agathos Technology S.A.S.</a>
				</p>
			</div>
		</div>
	</footer>

	<?php do_action( 'storefront_after_footer' ); ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
