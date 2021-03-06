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

	<div class="banner row-fluid">
		<div class="span4">
			<?php if ( is_active_sidebar( 'Overview Sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'Overview Sidebar' ); ?>
				<script type="text/javascript">
				$(document).ready(function(){
					$('.banner .enhanced-text-widget').click(function(){
						var banner_link = $(this).find('a');
						var banner_url = banner_link.attr('href');
						banner_link.css('color','#ffcf01');
						window.open(banner_url, '_self');
						return true;
					});
				});
				</script>
			<?php endif; ?>
		</div>
		<div class="span8">
			<div class="slider-container">
				<?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>
			</div>
		</div>
		
	</div>

</header>
<div id="primary" class="row-fluid">
    <div id="content" class="span8" role="main">
    
    	<?php $homepage = new WP_Query( 'category_name=updates&posts_per_page=1' ); ?>
			
			<?php if ( $homepage->have_posts() ) : while ( $homepage->have_posts() ) : $homepage->the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    
				    <div class="entry-header">
				        
				        <h1 class="entry-title">
				            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'harvestsf' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				        </h1>
				        
				    </div><!-- .entry-header -->
				    
				    <div class="span1"></div>
				    
				    <div class="entry-content span10">
				    
				        <?php the_content( __( 'Read More', 'harvestsf' ) ); ?>

                        <div class="visible-phone mobile-read-more">
                            <a href="<?php the_permalink(); ?>" title="Read More">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-more-button.png" alt="Mobile More Button">
                            </a>
                        </div>

                        <div class="clearboth"></div>

                        <?php get_template_part( 'include', 'entry-meta' ); ?>
					    
				    </div><!-- .entry-content -->
				    
					<div class="clearboth"></div>
				    
				</article><!-- #post -->

				
				<?php endwhile; ?>
			<?php endif; ?>
		<?php wp_reset_postdata(); /* Restore original Post Data */ ?>

    </div><!-- #content -->
    <div id="sidebar" class="span4">
	    <?php get_sidebar('event'); ?>
    </div>
</div><!-- #primary -->

<script type="text/javascript">
$(document).ready(function(){
	$('.widget_recent_entries .crpw-item').click(function(){
		var event_url = $(this).find('a').attr('href');
		window.open(event_url, '_self');
		return true;
	});
});
</script>

<?php get_footer(); ?>