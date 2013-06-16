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
			    
			    <div class="entry-content span12">

		            <?php the_content(); ?>
		            
			    </div><!-- .entry-content -->
			    
				<div class="clearboth"></div>
			    
			</article><!-- #post -->

			<?php endwhile; ?>
			
		<?php endif; ?>
		
		<?php wp_reset_postdata(); /* Restore original Post Data */ ?>
		
		<div class="listing row-fluid">
			
	    	<?php $children = new WP_Query( 'post_type=page&post_parent=1864' ); ?>
	    	
			<?php $count = 0; ?>
			
			<?php if ( $children->have_posts() ) : while ( $children->have_posts() ) : $children->the_post(); ?>
			
				<?php $count += 1; if ($count&1) { $oddeven = 'odd'; } else { $oddeven = 'even'; } ?>
				
				<article id="post-<?php the_ID(); ?>" class="listings span6 <?php echo $oddeven; ?>">
				    
				    <div class="entry-content span12">
				    
				    	<div class="thumb">
				    	
				    		<h2 class="thumb-title"><a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                            <?php if (has_post_thumbnail()) { echo the_post_thumbnail('full-view'); } ?>
				    	
				    	</div>
				    	
				    	<div class="excerpt">

                            <?php
                                global $more;
                                $more = 0;
                                the_content('');
                            ?>
				    	
				    	</div>
				    	
				    	<a href="<?php echo get_permalink(); ?>" title="Read More >" class="readmore">Read More <img src="<?php echo get_template_directory_uri(); ?>/assets/img/orange-right-arrow.png" alt="" class="arrow"></a>
			            
				    </div><!-- .entry-content -->
				    
					<div class="clearboth"></div>
				    
				</article><!-- #post -->
	
			<?php endwhile; ?>
			
			<?php endif; ?>
			
			<?php wp_reset_postdata(); /* Restore original Post Data */ ?>
		
		</div>

        <?php get_template_part( 'include', 'entry-meta' ); ?>

    </div><!-- #content -->
    <div id="sidebar" class="span4">
	    <?php get_sidebar('int-events'); ?>
    </div>
    <div class="clearboth"></div>
</div><!-- #primary -->

<?php get_footer(); ?>