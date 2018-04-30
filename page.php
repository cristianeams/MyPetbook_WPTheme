<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mypetbook
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                    
                <header id="stripes-header">
                    <div class="stripes">
                        <div class="stripe s1"></div>
                        <div class="stripe s2"></div>
                        <div class="background"></div>
                        <div class="stripe s3"></div>
                        <div class="stripe s4"></div>
                        <div class="stripe s5"></div>
                    </div>

                    <section class="intro">
                        <h1>Keep all your pets' data at your fingertips</h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="Phone" />
                        <a id="download" href='https://goo.gl/VREkzT' target="_blank"><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/></a>

                    </section>
                </header>    
                
                <div id="site-content">
                    <?php
                    while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                            endif;

                    endwhile; // End of the loop.
                    ?>
                </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
