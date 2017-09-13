<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container terms" id="m-top">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center"><?php the_title(); ?></h3>
            <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="entry-content-page">
                    <?php the_content(); ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->

            <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>