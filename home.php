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
        <h1> MyPetbook Blog</h1>
        
         <?php get_search_form(); ?>
        
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                    
                    <!--recent 5 posts slider-->
                    <?php echo do_shortcode('[recent_post_slider design="design-3" show_content=”true”]'); ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
