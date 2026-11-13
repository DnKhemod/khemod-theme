<?php
/**
 * The template for displaying single produk
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

get_header();

$harga     = get_post_meta( get_the_ID(), '_khemod_produk_harga', true );
$kandungan = get_post_meta( get_the_ID(), '_khemod_produk_kandungan', true );
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-produk' ); ?>>
			<header class="single-produk__header">
				<h1 class="single-produk__title"><?php the_title(); ?></h1>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="single-produk__image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="single-produk__content">
				<?php if ( ! empty( $kandungan ) ) : ?>
					<div class="single-produk__meta">
						<strong><?php esc_html_e( 'Kandungan Rempah:', 'khemod-theme' ); ?></strong>
						<p><?php echo esc_html( $kandungan ); ?></p>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $harga ) ) : ?>
					<div class="single-produk__harga">
						<strong><?php esc_html_e( 'Harga:', 'khemod-theme' ); ?></strong>
						<p><?php echo esc_html( $harga ); ?></p>
					</div>
				<?php endif; ?>

				<div class="single-produk__description">
					<?php the_content(); ?>
				</div>
			</div>

			<footer class="single-produk__footer">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'produk' ) ); ?>" class="btn-back">
					<?php esc_html_e( '← Kembali ke Katalog', 'khemod-theme' ); ?>
				</a>
			</footer>
		</article>
		<?php
	endwhile;
	?>
</main>

<?php
get_footer();