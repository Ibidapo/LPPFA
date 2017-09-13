<?php get_header(); ?>
    <!-- Body and Main Content of page -->
    <div class="container-fluid">
        <?php get_template_part('content', get_post_format()); ?>
    </div>
<?php get_footer(); ?>