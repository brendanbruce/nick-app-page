<?php
/**
 * Template Name: Landing Page
 * Description: Page template without sidebar
 * @package NickApp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php
				get_template_part("template-parts/home", "header");
			?>


			<?php
				get_template_part("template-parts/home", "shows");
			?>


			<?php
				get_template_part("template-parts/home", "events");
			?>


			<?php
				get_template_part("template-parts/home", "games");
			?>


			<?php
				get_template_part("template-parts/home", "email");
			?>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
