<?php
/**
 * The Home template file
 * 
 * webwalker 1.0
 */
?>

	<?php  get_header(); ?>
	<div id="main">
		
	<!--		content page 		-->	
			<div id="all">
				<div id="right">					
					<section id="content">
		<?php query_posts('pagename=about-company'); ?>
		<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		<h1> <a href="<?php the_permalink() ?>" ><?php the_title(); ?></a> </h1>
		<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php endif; ?>				
					</section>			
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<section id="section1">
	<?php dynamic_sidebar( 'sidebar-3' ); } ?>
			</section>			
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
			<section id="section2">
	<?php dynamic_sidebar( 'sidebar-4' ); } ?>
			</section>
				
				</div>
			</div>
	
	<!--		sidebar left		-->
	<?php  get_sidebar(); ?>
	<!--		end sidebar left		-->
		
	</div>
	<!--		footer		-->
	
	<?php  get_footer(); ?>
