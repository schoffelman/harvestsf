<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage harvestsf
 */

get_header(); ?>

<?php get_template_part( 'include', 'feature' ); ?>

</header>
<div id="primary" class="site-content row-fluid listing">
    <div id="content" class="span8" role="main">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    
			    <div class="entry-content span10">

		            <?php get_template_part( 'content', get_post_format() ); ?>
		            
			    </div><!-- .entry-content -->
			    
				<div class="clearboth"></div>
			    
			</article><!-- #post -->

			<?php endwhile; ?>
			
		<?php endif; ?>
		
		<?php wp_reset_postdata(); /* Restore original Post Data */ ?>
		
		<div class="listing row-fluid">
		
			<?php 
			
			// only doing this stupid hack b/c post_type doesn't work when using new WP_Query in the loop...
			
			// global $wpdb;
			// $pageQuery = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE post_parent = $post->ID AND post_type = 'page' AND post_status = 'publish'";
			// $pages = $wpdb->get_results($pageQuery);
			
			?>
		
			<?php // foreach ( $pages as $key=>$page ) :  ?>
			
	    	<?php $children = new WP_Query( 'post_type=page&post_parent=9' ); ?>
			
			<?php if ( $children->have_posts() ) : while ( $children->have_posts() ) : $children->the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" class="listings span5">
				    
				    <div class="entry-content span10">
				    
				    	<?php echo get_the_post_thumbnail(); ?>
				    
				    	<?php the_excerpt(); ?>
			            
				    </div><!-- .entry-content -->
				    
					<div class="clearboth"></div>
				    
				</article><!-- #post -->
	
			<?php endwhile; ?>
			
			<?php endif; ?>
			
			<?php wp_reset_postdata(); /* Restore original Post Data */ ?>
		
		</div>

    </div><!-- #content -->
    <div id="sidebar" class="span4">
	    <?php get_sidebar('int-events'); ?>
    </div>
    <div class="clearboth"></div>
</div><!-- #primary -->

<?php get_footer(); ?>