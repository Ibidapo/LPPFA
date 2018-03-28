<?php /* Template Name: Downloads */ ?>

<?php
$downloads = get_field("downloads");
?>

<?php get_header(); ?>

<!-- Body Content of Page-->
<div class="container" id="m-top">
    <div class="row">
        <div class="col-12 banner-dl">
            <img src="<?= get_field("banner_image")['url'] ?>"/>
        </div>
    </div>
    <div class="row" id="downld">
        <?php foreach($downloads as $download): ?>
        <div class="col-md-6">
            <h4><?= $download['title'] ?></h4>
            <p><?= $download['description'] ?></p>
            <ul>
                <?php foreach($download['files'] as $file) { ?>
                    <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="<?= $file['file']['url'] ?>" target="_blank">
                            <?= $file['title'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php endforeach ?>
    </div>
</div>


<?php get_footer(); ?>
<script>
    //Resize container based on desktop or mobile viewport.
    var size = window.innerWidth;
    if (size <= 991) {
        $("#m-top").attr("class", "container-fluid");
    }
</script>

</body>
</html>