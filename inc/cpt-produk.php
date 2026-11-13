<?php
/**
 * Custom Post Type: Produk & Meta Boxes
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Custom Post Type 'Produk'
 */
function khemod_register_produk_cpt(): void {
	$labels = array(
		'name'                  => _x( 'Katalog Produk', 'Post Type General Name', 'khemod-theme' ),
		'singular_name'         => _x( 'Produk Teh', 'Post Type Singular Name', 'khemod-theme' ),
		'menu_name'             => __( 'Produk Teh', 'khemod-theme' ),
		'name_admin_bar'        => __( 'Produk Teh', 'khemod-theme' ),
		'add_new'               => __( 'Tambah Produk', 'khemod-theme' ),
		'add_new_item'          => __( 'Tambah Produk Baru', 'khemod-theme' ),
		'new_item'              => __( 'Produk Baru', 'khemod-theme' ),
		'edit_item'             => __( 'Edit Produk', 'khemod-theme' ),
		'view_item'             => __( 'Lihat Produk', 'khemod-theme' ),
		'all_items'             => __( 'Semua Produk', 'khemod-theme' ),
		'search_items'          => __( 'Cari Produk', 'khemod-theme' ),
		'not_found'             => __( 'Tidak ada produk ditemukan.', 'khemod-theme' ),
		'not_found_in_trash'    => __( 'Tidak ada produk di trash.', 'khemod-theme' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'produk' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-admin-page', // Bisa diganti dashicons-cart atau custom.
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'produk', $args );
}
add_action( 'init', 'khemod_register_produk_cpt' );

/**
 * Add Meta Boxes for Produk
 */
function khemod_add_produk_meta_boxes(): void {
	add_meta_box(
		'khemod_produk_details',
		__( 'Detail Produk', 'khemod-theme' ),
		'khemod_produk_meta_box_callback',
		'produk',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'khemod_add_produk_meta_boxes' );

/**
 * Meta Box Callback
 */
function khemod_produk_meta_box_callback( WP_Post $post ): void {
	wp_nonce_field( 'khemod_produk_meta_save', 'khemod_produk_meta_nonce' );

	$harga = get_post_meta( $post->ID, '_khemod_produk_harga', true );
	$kandungan = get_post_meta( $post->ID, '_khemod_produk_kandungan', true );
	?>
	<p>
		<label for="khemod_produk_harga"><strong><?php esc_html_e( 'Harga:', 'khemod-theme' ); ?></strong></label><br>
		<input type="text" id="khemod_produk_harga" name="khemod_produk_harga" value="<?php echo esc_attr( $harga ); ?>" size="25" placeholder="Contoh: Rp 15.000">
	</p>
	<p>
		<label for="khemod_produk_kandungan"><strong><?php esc_html_e( 'Kandungan Rempah:', 'khemod-theme' ); ?></strong></label><br>
		<input type="text" id="khemod_produk_kandungan" name="khemod_produk_kandungan" value="<?php echo esc_attr( $kandungan ); ?>" size="50" placeholder="Contoh: Jahe, Serai, Cengkeh, Kayu Manis">
	</p>
	<?php
}

/**
 * Save Meta Box Data
 */
function khemod_save_produk_meta( int $post_id ): void {
	// Check if our nonce is set.
	if ( ! isset( $_POST['khemod_produk_meta_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['khemod_produk_meta_nonce'] ) ), 'khemod_produk_meta_save' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'produk' === $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	// Sanitize and save 'Harga'.
	if ( isset( $_POST['khemod_produk_harga'] ) ) {
		$harga = sanitize_text_field( wp_unslash( $_POST['khemod_produk_harga'] ) );
		update_post_meta( $post_id, '_khemod_produk_harga', $harga );
	}

	// Sanitize and save 'Kandungan Rempah'.
	if ( isset( $_POST['khemod_produk_kandungan'] ) ) {
		$kandungan = sanitize_text_field( wp_unslash( $_POST['khemod_produk_kandungan'] ) );
		update_post_meta( $post_id, '_khemod_produk_kandungan', $kandungan );
	}
}
add_action( 'save_post', 'khemod_save_produk_meta' );