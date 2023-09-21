<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	</div><!-- #content -->    

	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">

	<?php get_template_part( 'footer-widget' ); ?>
	</footer>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>//console.log("footer.php");</script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true, gaId: 'UA-4813602-2'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">

#google_translate_element {
  display:block;
  width:auto;
  max-width:160px;
  border:none;
  background-color:#fff;
  color:#444;
  overflow:hidden;
  position:relative;
  height:40px;
  line-height:40px;
  border:1px solid #e0e0e0;
  text-align: center;
  text-transform: uppercase;
  font-family: FFKievitWebProExtraBold;
  vertical-align: bottom;
}
#google_translate_element select {
  border:none;
  background:transparent;
  text-transform: uppercase;
  font-family: FFKievitWebProExtraBold;
  font-size:14px;
  color:#444;
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
  -webkit-appearance:none;
  cursor:text;
  padding:5px 10px;
}

.ul{
        display: inline-block;
}
option {
  background:#444;
  color:#e0e0e0;
}

.goog-te-gadget img{
        display: none;
}

.links li{
        vertical-align: bottom;
}

</style>

</body>
</html>