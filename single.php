<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme_starter
 */

get_header();
?>


<div class="contents__outer">
	<div class="contents__inner flex">

	<aside class="aside__outer">
		<div class="aside__inner">
			<?php get_sidebar(); ?>
		</div>
	</aside>
	<!-- /.aside__outer -->

	<main class="main__outer w-full">
		<div class="main__inner">

<?php 
// the_post_thumbnail( 'thumbnail' );
// the_post_thumbnail( 'medium' );
// the_post_thumbnail( 'large' );
// the_post_thumbnail( 'thumb-tb' );
// the_post_thumbnail( 'thumb-pc' );
// the_post_thumbnail( 'thumb-sm' );
// the_post_thumbnail( 'thumb-md' );
// the_post_thumbnail( 'thumb-lg' );
// the_post_thumbnail( 'thumb-xl' );
// the_post_thumbnail( 'thumb-wide' );
the_post_thumbnail(array( 700) ); 
the_post_thumbnail(); 
 ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kote2-tokyo' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kote2-tokyo' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<?php the_meta(); ?>

		</div>
	</main>
	<!-- /.main__outer -->
	</div>
</div>
<!-- /.contents__outer -->


<?php
get_footer();