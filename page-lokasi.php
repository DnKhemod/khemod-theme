<?php
/**
 * Template Name: Lokasi & Kontak
 * The template for displaying the Location & Contact page
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

	<section class="lokasi-content">
		<div class="container">
			<div class="lokasi-grid">
				<!-- Informasi Kontak -->
				<div class="lokasi-info">
					<h2><?php esc_html_e( 'Kunjungi Kedai Kami', 'khemod-theme' ); ?></h2>
					
					<div class="info-item">
						<h3><?php esc_html_e( 'Alamat', 'khemod-theme' ); ?></h3>
						<p><?php esc_html_e( 'Jln. Sucimanah no 19, RT 01 / RW 06, Kel. Jagasatru, Kec. Pekalipan, Cirebon, Jawa Barat', 'khemod-theme' ); ?></p>
					</div>

					<div class="info-item">
						<h3><?php esc_html_e( 'Jam Operasional', 'khemod-theme' ); ?></h3>
						<p><?php esc_html_e( 'Senin – Sabtu: 09:00 s/d 23:00', 'khemod-theme' ); ?></p>
						<p><?php esc_html_e( 'Minggu: 10:00 s/d 22:00', 'khemod-theme' ); ?></p>
					</div>

					<div class="info-item">
						<h3><?php esc_html_e( 'Kontak', 'khemod-theme' ); ?></h3>
						<p>
							<a href="tel:081224364080">
								<?php esc_html_e( '0812-2436-4080', 'khemod-theme' ); ?>
							</a>
						</p>
					</div>
				</div>

				<!-- Peta -->
				<div class="lokasi-map">
					<!-- Ganti src iframe dengan link embed Google Maps lokasi asli Anda -->
					<iframe 
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.123456789!2d108.55!3d-6.73!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDMnNDguMCJTIDEwOMKwMzMnMDAuMCJF!5e0!3m2!1sid!2sid!4v1234567890" 
						width="100%" 
						height="450" 
						style="border:0;" 
						allowfullscreen="" 
						loading="lazy" 
						referrerpolicy="no-referrer-when-downgrade"
						title="<?php esc_attr_e( 'Peta Lokasi Kedai Teh Sehat ala Khemod', 'khemod-theme' ); ?>">
					</iframe>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();