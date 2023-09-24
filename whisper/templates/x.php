<?php get_header();
?>
<style>
	h1,
	h2,
	h3 {
		font-family: "poppins";
		font-weight: 600;
	}

	.elementor-location-header, #footer, #masthead {
		display: none;
	}

	.container, .elementor-location-footer .elementor-section {
    max-width: 100%;
	}

	.bb-grid {
	display: block;
    width: 100%;
	}

	.top {
		padding: 10px 0;
		background-color: white;
	}

	body {
		background-color: #fff;
	}

	.elementor-column-gap-extended {
		gap: 30px;
	}

	.subtitle {
		color: #635BFF;
		font-family: "Poppins", Sans-serif;
		font-size: 16px;
		font-weight: 700;
	}

	.elementor-col-50 {
		align-items: center;
	}

	.elementor-section {
		padding-top: 110px;
		max-width: 1150px;
		margin: auto;
	}

	.button {
		background-color: #635bff;
		color: white;
		padding: 21px 25px;
		border-radius: 75px;
		margin-top: 20px;
		display: flex;
		font-family: 'Poppins';
		font-weight: 600;
		align-items: center;
		max-width: 280px;
		justify-content: center;
		transition-duration: 0.3s;
	}

	.button:hover {
		background-color: black;
		cursor: pointer;
		color: white;
	}

	.wave-container::before {
		content: "";
		width: 100%;
		height: 160px;
		position: absolute;
		left: 0;
		right: 0;
		bottom: -0.3%;
		left: 0;
		background-size: auto;
		background-repeat: repeat no-repeat;
		background-position: 35vw bottom;
		background-image: url("data:image/svg+xml;utf8,<svg viewBox='0 0 1200  134' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 98L50 92C100 86 200 74 300 50C400 26 500 -10 600 2C700 14 800 74 900 98C1000 122 1100 110 1150 104L1200 98V134H1150C1100 134 1000 134 900 134C800 134 700 134 600 134C500 134 400 134 300 134C200 134 100 134 50 134H0V98Z' fill='%23ffffff'/></svg>");
	}

	.footer-CTA {
		background-color: #f6f9fc;
		margin-top: 80px;
		padding: 40px 0;
	}

	.footer-CTA .elementor-section {
		padding: 0;
	}

	.footer-CTA h2 {
		font-family: 'Poppins';
		font-size: 26px;
		font-weight: 600;
	}

	#adobe-dc-view {
		height: 500px;
	}

	.outcomes ul {
		list-style: none;
		padding: 0;
		margin-bottom: 30px;
	}

	.outcomes ul li {
		position: relative;
		padding-left: 30px;
		margin-bottom: 20px;
	}

	.outcomes ul li:before {
		content: "";
		position: absolute;
		left: -1px;
		top: 0px;
		width: 22px;
		height: 22px;
		background-color: #25bb64;
		border-radius: 50%;
	}

	.outcomes ul li:after {
		content: "";
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 12px;
		border: solid #fff;
		border-width: 0 2px 2px 0;
		transform: rotate(45deg);
	}

	.transition,
	ul li i:before,
	ul li i:after,
	.FAQ p {
		transition: all 0.25s ease-in-out;
	}

	.flipIn,
	.FAQ ul li,
	.FAQ h1 {
		animation: flipdown 0.5s ease both;
	}

	.no-select,
	.FAQ h2 {
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		text-align: center;
	}

	.FAQ h3 {
		font-size: 20px;
		line-height: 34px;
		font-weight: 600;
		letter-spacing: 0px;
		display: block;
		margin: 0;
		cursor: pointer;
	}

	.FAQ p {
		color: rgba(48, 69, 92, 0.8);
		font-size: 17px;
		line-height: 26px;
		letter-spacing: 0px;
		position: relative;
		overflow: hidden;
		max-height: 800px;
		opacity: 1;
		transform: translate(0, 0);
		margin-top: 14px;
		z-index: 2;
	}

	.FAQ ul {
		list-style: none;
		perspective: 900;
		padding: 0;
		margin: 0;
	}

	.FAQ ul li {
		position: relative;
		padding: 0;
		margin: 0;
		padding-bottom: 4px;
		padding-top: 18px;
		border-top: 1px dotted #dce7eb;
	}

	.FAQ ul li:nth-of-type(1) {
		animation-delay: 0.5s;
	}

	.FAQ ul li:nth-of-type(2) {
		animation-delay: 0.75s;
	}

	.FAQ ul li:nth-of-type(3) {
		animation-delay: 1s;
	}

	.FAQ ul li:last-of-type {
		padding-bottom: 0;
	}

	.FAQ ul li i {
		position: absolute;
		transform: translate(-6px, 0);
		margin-top: 16px;
		right: 0;
	}

	.FAQ ul li i:before,
	.FAQ ul li i:after {
		content: "";
		position: absolute;
		background-color: #ff6873;
		width: 3px;
		height: 9px;
	}

	.FAQ ul li i:before {
		transform: translate(-2px, 0) rotate(45deg);
	}

	.FAQ ul li i:after {
		transform: translate(2px, 0) rotate(-45deg);
	}

	.FAQ ul li input[type=checkbox] {
		position: absolute;
		cursor: pointer;
		width: 100%;
		height: 100%;
		z-index: 1;
		opacity: 0;
	}

	.FAQ ul li input[type=checkbox]:checked~p {
		margin-top: 0;
		max-height: 0;
		opacity: 0;
		transform: translate(0, 50%);
	}

	.FAQ ul li input[type=checkbox]:checked~i:before {
		transform: translate(2px, 0) rotate(45deg);
	}

	.FAQ ul li input[type=checkbox]:checked~i:after {
		transform: translate(-2px, 0) rotate(-45deg);
	}

	@keyframes flipdown {
		0% {
			opacity: 0;
			transform-origin: top center;
			transform: rotateX(-90deg);
		}

		5% {
			opacity: 1;
		}

		80% {
			transform: rotateX(8deg);
		}

		83% {
			transform: rotateX(6deg);
		}

		92% {
			transform: rotateX(-3deg);
		}

		100% {
			transform-origin: top center;
			transform: rotateX(0deg);
		}
	}

	@media(max-width:850px) {
		.wave-container::before {
			height: 75px
		}
	}

	.wave-container {
		background-color: #f6f9fc;
		position: relative;
	}
</style>

<div class="row">
	<div class="elementor-col-100 elementor-column top justify-center">
		<a href="https://www.aicrafters.com"><img style="max-width: 160px" src="https://www.aicrafters.com/wp-content/uploads/2023/05/cropped-AICR-logo.png"></a>
	</div>
</div>

<div class="wave-container" style="background-color: #f6f9fc">
	<div class="elementor-section">
		<div class="elementor-container elementor-column-gap-extended">
			<div class="elementor-column elementor-col-50 elementor-element">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-widget elementor-widget-heading">
						<div class="elementor-widget-container">
							<span class="subtitle">Téléchargement gratuit</span>
						</div>
					</div>
					<div class="elementor-element elementor-element-665265c elementor-widget elementor-widget-heading">
						<div class="elementor-widget-container">
							<h1 class="elementor-heading-title elementor-size-default"><?php echo get_the_title(); ?></h1>
						</div>
					</div>
					<div class="elementor-element elementor-widget elementor-widget-text-editor">
						<div class="elementor-widget-container">
							<p><?php echo wp_strip_all_tags(get_the_content()); ?></p>
							<a href="#0" class="button opensimsim">Télécharger gratuitement</a>
						</div>
					</div>
				</div>
			</div>
			<div class="elementor-column elementor-col-50 elementor-element">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-widget elementor-widget-image">
						<div class="elementor-widget-container">
							<img decoding="async" src="<?php echo get_the_post_thumbnail_url(); ?>" class="attachment-large size-large" alt="" loading="lazy">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    // Display ACF fields
                    $custom_field_value = get_field('titre');
                    echo '<p>' . $custom_field_value . '</p>';
                    $custom_field_value = get_field('description');
                    echo '<p>' . $custom_field_value . '</p>';
                    $custom_field_value = get_field('prompt');
                    echo '<p>' . $custom_field_value . '</p>';
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    </main>
</div>

<div class="elementor-section">
	<div class="elementor-container elementor-column-gap-extended">
		<div class="elementor-column elementor-col-50 elementor-element">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-widget elementor-widget-heading">
					<div class="elementor-widget-container">
						<h2 class="elementor-heading-title elementor-size-default">En complétant cet ebook, vous allez :</h2>
					</div>
				</div>
				<div class="elementor-element elementor-widget elementor-widget-text-editor">
					<div class="elementor-widget-container outcomes">
						<?php
						if (have_rows('learning_outcomes')) {
							echo "<ul>";
							// Loop through the rows of the repeater field
							while (have_rows('learning_outcomes')) {
								// Get the current row
								the_row();

								// Get the values of the repeater fields
								$outcome = get_sub_field('outcome');

								echo "<li>" . $outcome . "</li>";
							}
							echo "</ul>";
						} ?>
					</div>
				</div>
				<div class="elementor-element elementor-widget elementor-widget-text-editor">
					<div class="elementor-widget-container">
						<a href="#0" class="button opensimsim">Télécharger gratuitement</a>
					</div>
				</div>
			</div>
		</div>
		<div class="elementor-column elementor-col-50 elementor-element">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div id="adobe-dc-view"></div>
				<script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>
				<script type="text/javascript">
					document.addEventListener("adobe_dc_view_sdk.ready", function() {
						var adobeDCView = new AdobeDC.View({
							clientId: "3459243af96345bd9dfcff3900386aa2",
							divId: "adobe-dc-view"
						});
						adobeDCView.previewFile({
							content: {
								location: {
									url: "<?php echo get_field("preview_pdf");?>"
								}
							},
							metaData: {
								fileName: "<?php echo 'Aperçu : '.get_the_title();?>"
							}
						}, {
							embedMode: "SIZED_CONTAINER",
							showFullScreen: true,
							showDownloadPDF: false,
							howZoomControl: false,
							showPrintPDF: false,
							enableSearchAPIs: false,
							startPage: 1,
							endPage: 4
						});
					});
				</script>

			</div>
		</div>

	</div>
</div>


<?php
// Check if the ACF repeater field has rows
if (have_rows('sections')) {
	// Initialize a variable to keep track of the section count
	$section_count = 0;

	// Loop through the rows of the repeater field
	while (have_rows('sections')) {
		// Get the current row
		the_row();

		// Get the values of the repeater fields
		$title = get_sub_field('title');
		$description = get_sub_field('description');
		$image = get_sub_field('image');
		// Determine the class for column order based on the section count
		$column_order = ($section_count % 2 === 0) ? 'elementor-col-50' : 'elementor-col-reverse-50';

		// Output the HTML structure for one section
?>


		<div class="elementor-section">
			<div class="elementor-container elementor-column-gap-extended">
				<div class="elementor-column <?php echo esc_attr($column_order); ?> elementor-element">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-widget elementor-widget-image">
							<div class="elementor-widget-container">
								<img decoding="async" src="<?php echo esc_url($image); ?>" class="attachment-large size-large" alt="" loading="lazy">
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column <?php echo esc_attr($column_order); ?> elementor-element">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-widget elementor-widget-heading">
							<div class="elementor-widget-container">
								<span class="subtitle"></span>
							</div>
						</div>
						<div class="elementor-element elementor-element-665265c elementor-widget elementor-widget-heading">
							<div class="elementor-widget-container">
								<h1 class="elementor-heading-title elementor-size-default"><?php echo esc_html($title); ?></h1>
							</div>
						</div>
						<div class="elementor-element elementor-widget elementor-widget-text-editor">
							<div class="elementor-widget-container">
								<p><?php echo wp_strip_all_tags($description); ?></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>



<?php

		// Increment the section count
		$section_count++;
	}
}
?>

<div class="FAQ">
	<div class="elementor-section">
		<div class="elementor-container">
			<div class="elementor-col-100 justify-center">
				<h2>Quelques questions fréquentes (FAQ)</h2>

				<ul>
					<li>
						<input type="checkbox" checked>
						<i></i>
						<h3>Pourquoi ai-je besoin de remplir le formulaire ?</h3>
						<p><b>Nous veillerons toujours à la sécurité de vos informations personnelles.</b><br>
							Nous vous demandons vos informations en échange d'une ressource précieuse afin de
							(a) améliorer votre expérience de navigation en personnalisant le site AI Crafters selon vos besoins ;
							(b) vous envoyer des informations susceptibles de vous intéresser par e-mail ou d'autres moyens ;
							(c) vous envoyer des communications marketing que nous estimons être de valeur pour vous.
							Vous pouvez en savoir plus sur notre politique de confidentialité <a href="/politique-de-confidentialite">ici</a>.</p>
					</li>
					<li>
						<input type="checkbox" checked>
						<i></i>
						<h3>Est-ce vraiment gratuit ?</h3>
						<p><b>Absolument !</b><br>
							Nous partageons simplement des connaissances gratuites que nous espérons vous trouverez utiles. Pensez à nous la prochaine fois que vous avez des questions sur l'intelligence artificielle !





						</p>
					</li>
					<?php
					if (have_rows('faq')) {
						while (have_rows('faq')) {
							// Get the current row
							the_row();
							// Get the values of the repeater fields
							$question = get_sub_field('question');
							$answer = get_sub_field('answer');
							printf('<li>
		<input type="checkbox" checked>
		<i></i>
		<h3>%s</h3>
		<p>%s</p>
	  </li>', $question, $answer);
						}
					} ?>

				</ul>
			</div>

		</div>
	</div>
</div>

<div class="footer-CTA">
	<div class="elementor-section">
		<div class="elementor-container elementor-column-gap-extended">
			<div class="elementor-col-60 elementor-column justify-center">
				<h2>Bénéficiez maintenant de votre téléchargement gratuit : <?php the_title(); ?></h2>
			</div>
			<div class="elementor-col-10 elementor-column justify-center"></div>
			<div class="elementor-col-30 elementor-column justify-center">
				<a href="#0" class="button opensimsim">Télécharger gratuitement</a>
			</div>
		</div>
	</div>
</div>

<!-- <div class="simplefooter">

	<div class="row">
		<div class="elementor-col-100 elementor-column top justify-center">
			<img style="max-width: 160px" src="https://masterclass.aicrafters.com/wp-content/uploads/2023/05/cropped-AICR-logo.png">
		</div>
		<p class="tagline">Démocratiser l'IA pour les professionnels</p>
		<p>Copyright © 2023 AI Crafters, Inc.</p>
		<div class="bottom-menu">
			<a href="/termes-et-conditions">Termes et conditions</a>
			<a href="/politique-de-confidentialite">Politique de confidentialité</a>
			<a href="/cookies">Gérer les cookies</a>
		</div>
	</div>

</div> -->


<?php get_footer(); ?>

<script>
	jQuery("#form-field-downloadlink").val("<?php echo get_field("the_document"); ?>");
	jQuery("#form-field-downloadname").val("<?php echo get_the_title(); ?>");

</script>