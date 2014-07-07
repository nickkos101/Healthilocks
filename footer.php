<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
		<footer>
			<div class="footer-left">
				<div class="menu-holder">
					<?php wp_nav_menu(array('theme_location'=>'footer-menu','container_id'=>'footer-nav-wrapper','container_class'=>'group','menu_class'=>'botnav','fallback_cb'=>'footer_fallback')); ?>
				</div>
				<div class="signup-holder">
					<div class="signup">
						<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Signup Widget') ) : ?> <?php endif; ?></ul>
					</div>
					<div class="consultation">
						<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Consultation Widget') ) : ?> <?php endif; ?></ul>
					</div>
<img src="http://shop.healthilocks.com/v/vspfiles/assets/images/newcc_logos.png" border="0">
<a href="javascript:void(0);" onclick="window.open('https://www.volusion.com/ssl.asp?url=shop.healthilocks.com', 'VolusionSSL', 'top=10,left=10,menubar=0,resizable=0,scrollbars=0,width=467,height=467')"><img id="volusion_ssl_seal" src="http://shop.healthilocks.com//a/i/seal_volusion2.png" border="0" height="58" width="137" style="margin-top:-30px"></a>
				</div>
			</div>
			<div class="footer-right">
				<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Social Widget') ) : ?> <?php endif; ?></ul>
			</div>
		</footer>
		
   </div><!-- Wrapper Ends -->
	
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>


