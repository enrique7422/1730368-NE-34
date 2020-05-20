<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage perfect-ecommerce-store
 * @since 1.0
 * @version 1.4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header role="banner" class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php perfect_ecommerce_store_edit_link( get_the_ID() ); ?>
	</header>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'perfect-ecommerce-store' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>
