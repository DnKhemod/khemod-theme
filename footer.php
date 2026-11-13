<?php
/**
 * The template for displaying the footer
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);
?>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?> — Kedai Teh Sehat ala Khemod
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>