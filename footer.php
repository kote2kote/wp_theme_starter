<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_starter
 */

?>
  </div>
</main>
</div>




<footer id="colophon" class="outer-footer cm">
<div class="inner mx-auto flex">
<h2 class="text-6xl text-red-500">footer.php</h2>
		<div class="inner container mx-auto px-4">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'start_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'start_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'start_theme' ), 'start_theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
<!-- </div> -->
<!-- #page -->

			<!-- </div>
		</main>
	</div> 
</div> -->
</div> <!--inner-->
</div><!--outer-page-->
</div> <!--/ check-mode__js -->

<?php wp_footer(); ?>
</body>
</html>
