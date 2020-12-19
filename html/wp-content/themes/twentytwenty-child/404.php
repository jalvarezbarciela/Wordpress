<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">
        <div style="background-color: #5d01ff;color: #00a0d2">
        <br>
        <h1>:(</h1>
        <br>
        </div>
        <br>
		<h2 class="entry-title" style="background-color: #ffd800"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h2>

		<div class="intro-text"><p style="background-color: #00a0d2;color: #ffffff"><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>
        <br>
        <b id="comentario">Pagina de error personalizada</b>
	</div><!-- .section-inner -->


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
