<?php

/**
 * Creates our sidebar area and footer information
 *
 *
 * @package WordPress
 * @subpackage Simple
 * @since 1.0.0
 *
 *
 */
?><div id="sidebar">


	<?php  echo do_shortcode('[pano file="noorderdwars.xml" preview="preview2.jpg" alt="panorama" width="100%" title="Noorderdwarsstraat - sleep met de muis in de panorama om alles te bekijken."]') ?>



	<?php dynamic_sidebar('sidebar') ?>
	

		
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3&appId=701547723305377";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<br />

<div class="fb-page" data-href="https://www.facebook.com/noorderdwarsstraat" data-width="450" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/noorderdwarsstraat"><a href="https://www.facebook.com/noorderdwarsstraat">Noorderdwars straat</a></blockquote></div></div>


	
	<div><a class="twitter-timeline" href="https://twitter.com/Noorderdwars" data-widget-id="596993360117792768">Tweets door @Noorderdwars</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>



	<footer id="primary" class="clearfix">
		
		<?php if ( of_get_option('footer_text', $single = true) != "" ) : ?>
		
			<p><?php echo of_get_option('footer_text'); ?></p>
			
		<?php else : ?>
		
			<p>
				<a href="<?php echo home_url(); ?>/">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></a><br />
			
			</p> 
			
		
		<?php endif; ?>
		
	</footer><!-- footer#primary -->
	
</div><!-- #sidebar -->