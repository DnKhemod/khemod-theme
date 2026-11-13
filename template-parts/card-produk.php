<?php
/**
 * Template part for displaying produk card
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$harga      = get_post_meta( get_the_ID(), '_khemod_produk_harga', true );
$kandungan  = get_post_meta( get_the_ID(), '_khemod_produk_kandungan', true );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'produk-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="produk-card__image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="produk-card__content">
		<h3 class="produk-card__title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>

		<?php if ( ! empty( $kandungan ) ) : ?>
			<p class="produk-card__kandungan">
				<strong><?php esc_html_e( 'Rempah:', 'khemod-theme' ); ?></strong>
				<?php echo esc_html( $kandungan ); ?>
			</p>
		<?php endif; ?>

		<?php if ( has_excerpt() ) : ?>
			<div class="produk-card__excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $harga ) ) : ?>
			<p class="produk-card__harga">
				<?php echo esc_html( $harga ); ?>
			</p>
		<?php endif; ?>
	</div>
</article>