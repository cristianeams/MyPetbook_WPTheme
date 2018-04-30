<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mypetbook
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				mypetbook_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
        
        <!--thumbnail size setup-->
        <?php 
        if ( is_single() ) : 
            mypetbook_post_thumbnail(); //increase size according to screen width
        else : ?>
       
            <a class="thumb-link" href="<?php esc_url( the_permalink() ); ?>">
                <?php the_post_thumbnail( "mypetbook" );?> <!--fixed size for search and other pages -->
            </a>
        <?php
        endif;
        ?>
	
        
        <?php 
        if ( is_single() ) : //MAKES SURE THAT THE CONTENT IS ONLY SHOWN ON SINGLE PAGE
            ?>
            
        <div id="article-content">
            <?php
            the_content( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mypetbook' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
            get_the_title()
            ) );
            ?>
        </div>
        
        <?php
        elseif ( is_category() || is_tag() || is_search() || is_front_page() ) : //MAKES SURE THAT THE EXCERPT IS SHOWN ON CATEGORY, TAG AND SEARCH

            the_excerpt( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mypetbook' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )   
                ),
                get_the_title()
            ) );

         endif; 
         ?>

</article><!-- #post-<?php the_ID(); ?> -->
