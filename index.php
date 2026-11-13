<?php
/**
 * The main template file
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

get_header(); ?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
            <?php
        endwhile;
    else :
        echo '<p>' . esc_html__( 'Belum ada konten.', 'khemod-theme' ) . '</p>';
    endif;
    ?>
</main>

<?php
get_footer();