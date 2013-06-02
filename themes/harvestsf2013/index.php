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

</header>
<div id="primary" class="site-content">
    <div id="content" role="main">
        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

            <?php endwhile; ?>

        <?php else : ?>

        <article id="post-0" class="post no-results not-found">

            <header class="entry-header">
                <h1 class="entry-title"><?php _e( 'Sometimes, not knowing where you\'re at can be a good thing.', 'harvestsf' ); ?></h1>
            </header>

            <div class="entry-content">

                <?php get_template_part( 'content', '404' ); ?>

                <?php get_search_form(); ?>

            </div><!-- .entry-content -->

        </article><!-- #post-0 -->

        <?php endif; // end have_posts() check ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>