<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

    <!-- Body and Main Content of page -->
    <div class="container-fluid" id="m-top">
        <div class="row">
            <div class="col-12">
                <div class="page-wrapper" style="min-height:300px;padding: 50px 0;">
                    <div class="page-content">
                        <h1 class="page-title"><?php _e( 'Not Found'); ?></h1>
                        <h2><?php _e( 'This is somewhat embarrassing, isn’t it?'); ?></h2>
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>

                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->
                </div><!-- .page-wrapper -->

            </div>
        </div>
    </div>

<?php get_footer(); ?>