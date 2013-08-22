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

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content span12">

                <h4><em><?php _e( 'But have no fear, you\'ve come to the right place!', 'harvestsf' ); ?></em></h4>
                <?php
                $display_random = rand(1,4);
                $fact_number = 234 * $display_random;
                ?>
                <?php _e( "<h3>Fun fact #$fact_number: </h3>", 'harvestsf'); ?>
                <?php if( $display_random == 1) : ?>
                <?php _e( '<p>Of the some 6,000 plus prophesies in the bible, roughly 1/2 of them have already been fulfilled. The other 1/2 has not yet happened, but as the saying goes, "the day is still young"???</p>', 'harvestsf'); ?>
                <?php elseif( $display_random == 2) : ?>
                <?php _e( '<p>The Bible is estimated to have been written between 1500 BC and 100 AD by roughly 40 authors. Every book points to the need for savior.</p>', 'harvestsf'); ?>
                <?php elseif( $display_random == 3) : ?>
                <?php _e( '<p>When tempted by the Devil, Satan quoted Psalms 91:11-12, although he skipped verse 13. Probably because it talks about him, "You [Jesus] will tread upon the lion and cobra, The young lion and the serpent you will trample down."</p>', 'harvestsf'); ?>
                <?php else : ?>
                <?php _e( '<p>Many people don\'t realize that besides homosexuality, the real reason for Sodom\'s distruction is because the people of Sodom didn\'t help the poor and needy.</p>', 'harvestsf'); ?>
                <?php _e( '<p>Ezekiel 16:49-50 - Behold, this was the guilt of your sister Sodom: she and her daughters had arrogance, abundant food and careless ease, but she did not help the poor and needy. Thus they were haughty and committed abominations before Me. Therefore I removed them when I saw it.</p>', 'harvestsf'); ?>
                <?php endif; ?>

            </div><!-- .entry-content -->

            <div class="clearboth"></div>

        </article><!-- #post -->

    </div><!-- #content -->
    <div id="sidebar" class="span4">
        <?php get_sidebar('int-events'); ?>
    </div>
    <div class="clearboth"></div>
</div><!-- #primary -->

<?php get_footer(); ?>