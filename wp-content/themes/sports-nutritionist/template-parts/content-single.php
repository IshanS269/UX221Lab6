<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sports_nutritionist
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mag-post-single">
		<div class="mag-post-detail">
			<div class="mag-post-category">
				<?php sports_nutritionist_categories_single_list(); ?>
			</div>
			<header class="entry-header">
				<?php
				if ( 'post' === get_post_type() ) :
					?>
					<div class="mag-post-meta">
						<?php
						sports_nutritionist_posted_by_single();
						sports_nutritionist_posted_on_single();
						sports_nutritionist_posted_comments_single();
						sports_nutritionist_posted_time_single();
						?>
					</div>
				<?php endif; ?>
			</header><!-- .entry-header -->
		</div>
		<?php sports_nutritionist_post_thumbnail(); ?>
		<?php if ( !get_theme_mod( 'sports_nutritionist_single_post_hide_post_content', false ) ) { ?>
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sports-nutritionist' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sports-nutritionist' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		<?php } ?>
	</div>

	<footer class="entry-footer">
		<?php sports_nutritionist_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->