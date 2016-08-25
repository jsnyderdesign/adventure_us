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

<!-- Adds custom header support -->
<?php if ( get_header_image() ) : ?>
	<!-- Adds custom header as background with gradient over the top -->
<div class="header-image" style="
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php header_image(); ?>') no-repeat;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(20%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65))), url('<?php header_image(); ?>') no-repeat;
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php header_image(); ?>') no-repeat;
  background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php header_image(); ?>') no-repeat;
  background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php header_image(); ?>') no-repeat;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 20%, rgba(0, 0, 0, 0.65) 100%), url('<?php header_image(); ?>') no-repeat;">
	<!-- Puts site quote here -->
	<p class="site-quote"><?php echo get_theme_mod( 'site_quote' ); ?></p>
</div>
<?php endif; // End header image check. ?>
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
