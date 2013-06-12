<?php if (has_post_thumbnail()) { ?>

    <div class="post-banner">

        <?php if (get_post_meta( $post->ID, 'page-logo')) {
            $pagelogo = ' ' . get_post_meta( $post->ID, 'page-logo', true);
            echo '<img src="'.$pagelogo.'" alt="'. get_the_title() .' logo" class="page-logo">';
        } ?>

        <?php the_post_thumbnail( 'full-view' ); ?>

    </div>

<?php } ?>