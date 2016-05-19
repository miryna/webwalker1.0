<?php
/**
 * The Sidebar
 * 
 * webwalker 1.0
 */
?>	

	<div id="left">
	
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
			<section id="sectionleft1">
	<?php dynamic_sidebar( 'sidebar-1' ); } ?>
			</section>	
			
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<section id="sectionleft2">
	<?php dynamic_sidebar( 'sidebar-2' ); } ?>
			</section>
			
	</div>