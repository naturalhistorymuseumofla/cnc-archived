<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<script>console.log("search.php");</script>
<div class="container" style="margin-top:150px;">
	<div class="row" style="margin-top:50px; min-height:476px;">
		<section id="primary" class="col-lg-10 col-md-12 col-sm-12 offset-lg-1">

			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h4 class="page-title">
						Results for:
						<em>
						<?php 
						printf( esc_html__( '%s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); 
						?>
						</em>
					</h4>
				</header><!-- .page-header -->
				<hr/>
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>


				<span class="search-post-link"><h2 class="mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></span>
				<span class="search-post-excerpt"><?php the_excerpt(); ?></span>

				<?php 	/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					//get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation(); 

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->

	</div><!-- //row -->
</div><!-- //container -->
<?php
//get_sidebar();
get_footer();
