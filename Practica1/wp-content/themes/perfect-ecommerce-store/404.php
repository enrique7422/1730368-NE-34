<?php
/**
 * The template for displaying 404 pages (not found)
 * @package WordPress
 * @subpackage perfect-ecommerce-store
 * @since 1.0
 * @version 1.4
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="error-404 not-found">
				<div class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'perfect-ecommerce-store' ); ?></h1>
					<div class="home-btn">
						<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return to home page', 'perfect-ecommerce-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Return to home page', 'perfect-ecommerce-store' ); ?></span></a>
					</div>
				</div>
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'perfect-ecommerce-store' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</div>
		</main>
	</div>
</div>

<?php get_footer();
