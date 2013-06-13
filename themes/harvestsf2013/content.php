<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage harvestsf
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    
	    <div class="entry-summary">
	        <?php the_excerpt(); ?>
	    </div><!-- .entry-summary -->
    
    <?php else : ?>
    
	    <div class="entry-content">
	        <?php the_content( __( 'Read More', 'harvestsf' ) ); ?>
            <div class="clearboth"></div>
	        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'harvestsf' ), 'after' => '</div>' ) ); ?>
	    </div><!-- .entry-content -->
    
    <?php endif; ?>
    
</article><!-- #post -->