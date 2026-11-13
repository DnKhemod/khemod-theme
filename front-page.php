<?php
/**
 * The template for displaying the front page
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">
	<!-- Hero Section -->
	<section class="hero-section">
		<div class="container">
			<h1 class="hero-title"><?php esc_html_e( 'Kehangatan Rempah Alami untuk Tubuh yang Lebih Sehat, Ka.', 'khemod-theme' ); ?></h1>
			<p class="hero-subtitle"><?php esc_html_e( 'Nikmati perpaduan teh pilihan dan rempah tradisional yang dikemas secara modern.', 'khemod-theme' ); ?></p>
		</div>
	</section>

	<!-- Sekilas Tentang -->
	<section class="about-snippet">
		<div class="container">
			<h2><?php esc_html_e( 'Sekilas Tentang Kami', 'khemod-theme' ); ?></h2>
			<p><?php esc_html_e( 'Sejak 2023, Kedai Teh Sehat ala Khemod berkomitmen menyajikan minuman herbal yang menenangkan, sehat, dan terpercaya untuk menemani hari-hari Anda.', 'khemod-theme' ); ?></p>
		</div>
	</section>

	<!-- Highlight Produk -->
	<section class="produk-highlight">
		<div class="container">
			<h2><?php esc_html_e( 'Produk Unggulan Kami', 'khemod-theme' ); ?></h2>
			
			<?php
			$produk_args = array(
				'post_type'      => 'produk',
				'posts_per_page' => 4,
				'post_status'    => 'publish',
			);
			$produk_query = new WP_Query( $produk_args );

			if ( $produk_query->have_posts() ) :
				echo '<div class="produk-grid">';
				while ( $produk_query->have_posts() ) :
					$produk_query->the_post();
					get_template_part( 'template-parts/card', 'produk' );
				endwhile;
				echo '</div>';
				wp_reset_postdata();
			else :
				echo '<p>' . esc_html__( 'Belum ada produk unggulan yang ditampilkan.', 'khemod-theme' ) . '</p>';
			endif;
			?>
			
			<div class="cta-wrapper">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'produk' ) ); ?>" class="btn-primary">
					<?php esc_html_e( 'Lihat Semua Produk', 'khemod-theme' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- CTA Lokasi -->
	<section class="cta-lokasi">
		<div class="container">
			<h2><?php esc_html_e( 'Mampir dan Nikmati Secangkir Kehangatan, Ka!', 'khemod-theme' ); ?></h2>
			<a href="<?php echo esc_url( get_permalink( get_option( 'page_on_front' ) === get_the_ID() ? get_page_by_path( 'lokasi' ) : 0 ) ); ?>" class="btn-secondary">
				<?php esc_html_e( 'Temukan Lokasi Kami', 'khemod-theme' ); ?>
			</a>
		</div>
	</section>
</main>

<?php
get_footer();