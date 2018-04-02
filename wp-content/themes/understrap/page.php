<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

$siteBgSml = get_field('siteBgSml', 13);
$siteBgMed = get_field('siteBgMed', 13);
$siteBgLrg = get_field('siteBgLrg', 13);

$siteLogoSml = get_field('siteLogoSml', 13);
$siteLogoLrg = get_field('siteLogoLrg', 13);
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-sm-4"></div>

			<div class="col-sm-4">
				<div class="logo text-center">
					<?php  
						if (is_page($page = 'home')) { ?>
							<img class="logoLrg" src="<?php echo $siteLogoLrg ?>">
							
				  <?php } else { ?>
							  <img class="logoSml" src="<?php echo $siteLogoSml ?>">
							  
				  <?php	} 
					?>
					
				</div>
			</div>

			<div class="col-sm-4"></div>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
<style>
	/* "Mobile" CSS
	======================================================================= */
	#page { 
		font-size: 16px; font-family: Helvetica, Arial, sans-serif; /* This is the font size with which em units are based off of */
		background: url("<?php echo $siteBgSml; ?>") no-repeat center center fixed;
		background-size: cover;
		height: 100%;
		overflow: hidden;
		max-width: 100%;
	} 

	/* "Tablet" CSS
	======================================================================= */

	@media screen and (min-width: 600px){
		#page { 
		font-size: 18px; font-family: Helvetica, Arial, sans-serif; /* This is the font size with which em units are based off of */
		background: url("<?php echo $siteBgMed; ?>") no-repeat center center fixed;
		background-size: cover;
		height: 100%;
		overflow: hidden;
		max-width: 100%;
		} 
	}

	/* "Desktop" CSS
	======================================================================= */

	@media screen and (min-width: 900px){
		#page { 
		font-size: 20px; font-family: Helvetica, Arial, sans-serif; /* This is the font size with which em units are based off of */
		background: url("<?php echo $siteBgLrg; ?>") no-repeat center center fixed;
		background-size: cover;
		height: 100%;
		overflow: hidden;
		max-width: 100%;
		} 
	}
</style>