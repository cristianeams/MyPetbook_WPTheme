<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mypetbook
 */
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="error-404 not-found">
                
                <div class="page-content">
                                    
                                   <div class="content404">
                                        <header class="page-header">
                                            <h1 class="page-title"><?php esc_html_e( 'Sorry! I am lost...', 'mypetbook' ); ?></h1>
                                        </header><!-- .page-header -->
                                        
                    <?php
                    get_search_form();
//                  the_widget( 'WP_Widget_Recent_Posts' );
                    ?>
                                    
                                   </div>
                    
                </div><!-- .page-content -->
            </section><!-- .error-404 -->
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_sidebar();
get_footer();