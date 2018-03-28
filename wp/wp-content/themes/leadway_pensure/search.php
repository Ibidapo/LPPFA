<?php
/**
 * The template for displaying search results pages
 *
 */

get_header(); ?>

    <!-- Body and Main Content of page -->
    <div class="container text-center" id="m-top">
        <br/>

        <header class="page-header">
            <?php if (have_posts()) : ?>
                <h2 class="page-title"><?php printf(__('Search Results for: "%s"', 'leadwaypensure'), '<span>' . get_search_query() . '</span>'); ?></h2>
            <?php else : ?>
                <h2 class="page-title"><?php _e('Nothing Found', 'leadwaypensure'); ?></h2>
            <?php endif; ?>
        </header>
        <!-- .page-header -->

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if (have_posts()) :
                    /* Start the Loop */
                    while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <header class="entry-header">
                                <?php if ( is_front_page() && ! is_home() ) {

                                    // The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
                                    the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
                                } else {
                                    the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                                } ?>
                            </header><!-- .entry-header -->

                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-summary -->

                        </article><!-- #post-## -->
                        <hr/>

                    <?php endwhile; // End of the loop.

                    the_posts_pagination(array(
                        'prev_text' => '<i class="fa fa-arrow-left"></i><span class="screen-reader-text">' . __('Previous page', 'leadwaypensure') . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __('Next page', 'leadwaypensure') . '</span><i class="fa fa-arrow-right"></i>',
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'leadwaypensure') . ' </span>',
                    ));

                else : ?>

                    <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'leadwaypensure'); ?></p>
                    <?php
                    get_search_form();

                endif;
                ?>

            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
