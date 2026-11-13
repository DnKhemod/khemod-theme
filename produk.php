<?php
/**
 * The template for displaying produk archive pages
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Katalog Produk', 'khemod-theme' ); ?></h1>
		<p class="page-description">
			<?php esc_html_e( 'Nikmati kehangatan rempah alami dalam setiap cangkir teh kami.', 'khemod-theme' ); ?>
		</p>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="produk-grid">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/card', 'produk' );
			endwhile;
			?>
		</div>

		<?php
		the_posts_pagination(
			array(
				'prev_text' => __( '← Sebelumnya', 'khemod-theme' ),
				'next_text' => __( 'Selanjutnya →', 'khemod-theme' ),
			)
		);
		?>
	<?php else : ?>
		<p><?php esc_html_e( 'Belum ada produk yang tersedia.', 'khemod-theme' ); ?></p>
	<?php endif; ?>
</main>

<?php
get_footer();