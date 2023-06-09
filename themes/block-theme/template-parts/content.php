<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package block_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">	
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				block_theme_posted_on();
				block_theme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php block_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="hero-column">
			<div class="hero-text-ACF">
				<div class="hero-title-ACF">
					<?php $id = get_the_ID();
					echo get_field('title_hero', $id); ?>
				</div>
				<div class="hero-block-text-ACF">
					<?php $id = get_the_ID();
					echo get_field('header_text_carrousel_1', $id); ?>
				</div>
				

				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'block-theme' ),
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
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'block-theme' ),
						'after'  => '</div>',
					)
				);
				?>	
			</div>
			<?php if( get_field('image') ): ?>
					<img src="<?php the_field('image'); ?>" />
				<?php endif; ?>
		
			
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php block_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
