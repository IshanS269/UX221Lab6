<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sports_nutritionist
 */

get_header();

$sports_nutritionist_column = get_theme_mod( 'sports_nutritionist_archive_column_layout', 'column-1' );
?>
<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>
		<div class="sports-nutritionist-archive-layout grid-layout <?php echo esc_attr( $sports_nutritionist_column ); ?>">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			endwhile;
			?>
		</div>
		<?php
		do_action( 'sports_nutritionist_posts_pagination' );
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</main><!-- #main -->
<?php
if ( sports_nutritionist_is_sidebar_enabled() ) {
	get_sidebar();
}
get_footer();