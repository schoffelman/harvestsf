<?php
/**
 * Include file for the feature header section on interior pages
 * 
 */
?>

	<div class="feature">
		<div class="breadcrumb">
		<?php 
			if (function_exists('bcn_display')) {
		        bcn_display();
		    } 
		?>
		</div>
		
        <?php if ( is_single() ) : ?>
        
	        <h1 class="entry-title"><?php the_title(); ?></h1>
        
        <?php else : ?>
        
	        <h1 class="entry-title">
	            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'harvestsf' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
	        </h1>
        
        <?php endif; // is_single() ?>
        
	</div>