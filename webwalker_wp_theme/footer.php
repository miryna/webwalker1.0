<?php
/**
 * The Footer 
 * 
 * webwalker 1.0
 */
?>
<div class="clear-for-ie6"></div>
	<footer >	
			<div id="footrights">© 2010 All rights reserved.<br>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro fugit verterem molestiae.</div>
		<div id="foot-menus">
			<nav class="mmenu">
				<?php wp_nav_menu( array( 'theme_location' => 'bottom',   
			   'container_class' => 'mmenu', )  ); ?>  	
			</nav>
		</div>
	</footer>
	<!--	footer		-->
</div>
<?php  wp_footer(); ?>
 </body>
</html>
