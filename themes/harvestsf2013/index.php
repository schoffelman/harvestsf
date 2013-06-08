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
<div id="primary" class="site-content row-fluid">
    <div id="content" class="span8" role="main">
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    
			    <div class="entry-content span10">

		            <?php get_template_part( 'content', get_post_format() ); ?>
			        
				    <div class="entry-meta">
				        
				        <span class='st_facebook_hcount' displayText='Facebook'></span>
						<span class='st_twitter_hcount' displayText='Tweet'></span>
						<span class='st_googleplus_hcount' displayText='Google +'></span>
						<span class='st_email_hcount' displayText='Email'></span>
				        
				    </div><!-- .entry-meta -->
				    
			    </div><!-- .entry-content -->
			    
				<div class="clearboth"></div>
			    
			</article><!-- #post -->

			
			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); /* Restore original Post Data */ ?>

    </div><!-- #content -->
    <div id="sidebar" class="span4">
	    <?php get_sidebar('int-events'); ?>
    </div>
    <div class="clearboth"></div>
</div><!-- #primary -->

<?php get_footer(); ?>