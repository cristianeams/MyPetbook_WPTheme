<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mypetbook
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
                <nav id="footer-site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-main-menu',
				'menu_id'        => 'footer-main-menu',
                                'menu_class'     => 'footer-main-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
                
                <nav id="footer-social-navigation" class="social-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'social-menu',
				'menu_id'        => 'social-menu',
                                'menu_class'     => 'social-menu',
                                'link_before'     => '<span class="screen-reader-text">',
                                'link_after'     => '</span>',
			) );
			?>
                    
                    <p>Made with <span id="love"></span> in Vancouver <span id="by">by Cristiane Silva, Fernanda Toledo, Samaneh Hoseini</span></p>
		</nav><!-- #site-navigation -->
                
                <div id="paws">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/paws.png" alt="Paws" />
                </div>
                
<!--		<div class="site-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mypetbook' ), 'mypetbook', '<a href="http://underscores.me/">Cristiane Silva, Fernanda Teixeira, Samaneh Hoseini</a>' );
				?>
		</div> .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
