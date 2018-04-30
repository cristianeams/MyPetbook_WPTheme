<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                            <a id="download" href='https://goo.gl/VREkzT' target='_blank'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/></a>
                                
                        </section>
                    </header>

                    <div id="site-content">
                        
                        <section id="home-content">
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
                        </section>
                        
                        <section id="blog">
                            <div id="blog-bg"></div>
                            
                            <div id="blog-content">
                                <h2 class="title">Blog</h2>

                                <?php echo do_shortcode('[recent_post_slider design="design-3" show_content=”true”]'); ?>

                                <a id="view-more" href="http://mypetbookapp.fernandatote.com/blog">View more</a>
                            </div>
                        </section>
                         
                    <section id="contact">
                            
                        <h2>Contact</h2>
                        
                        <?php echo do_shortcode("[ninja_form id=1]"); ?>
                    </section>


                    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
