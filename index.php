<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Adventure Us
 */

get_header(); ?>
		<div class="container">
	<div id="primary" class="content-area two-thirds column">

		<main id="main" class="site-main" role="main">


			<?php if ( have_posts() ) : ?>
				<?php while (have_posts()) : the_post();?>
					<?php $postvariable++; /* count the posts */ ?>
						<?php if ($postvariable == 1) { ?>

						<!-- If it's the first post on the homepage style it with this -->
						<div class="featured-post">
								<?php get_template_part( 'template-parts/content-homepage', get_post_format() ); ?>
						</div>

					<!-- Styling for all other regular posts -->
					<?php } else { ?>
					<div class="regular-post">
					<?php get_template_part( 'template-parts/content-homepage', get_post_format() ); ?>
					</div>



				<?php } endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_sidebar(); ?>
	</div><!-- .container -->
	<?php
get_footer(); ?>
