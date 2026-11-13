<?php
/**
 * Template Name: Tentang Kami
 * The template for displaying the About Us page
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">
	<header class="page-header">
		<div class="container">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</header>

	<section class="page-content">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<?php
			endwhile;
			?>
		</div>
	</section>
</main>

<?php
get_footer();