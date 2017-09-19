<?php /* Template Name: FAQs */ ?>

<?php
$general_faqs = get_field("general_faqs");
$contribution_faqs = get_field("contribution_faqs");
$retirement_faqs = get_field("retirement_faqs");
$retiree_funds_faqs = get_field("retiree_funds_faqs");

?>

<?php get_header(); ?>

<!-- Main Body of Page and Content -->
<div class="container" id="m-top">
    <div class="row" id="faq">
        <div class="col-12">
            <h3 class="text-center">General FAQs</h3>
            <div id="accordion7" role="tablist" aria-multiselectable="true">
                <?php foreach($general_faqs as $key => $faq): $num=$key+1?>
                <div class="card">
                    <div class="card-header" role="tab" id="gen<?= $num ?>">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion7" href="#emp<?= $num ?>" aria-expanded="true" aria-controls="emp<?= $num ?>">
                                <?= $faq['title'] ?>
                            </a>
                        </h5>
                    </div>
                    <div id="emp<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="gen<?= $num ?>">
                        <div class="card-block">
                            <?= $faq['content'] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="col-12">
            <h3 class="text-center">FAQs on Contributions</h3>
            <div id="accordion8" role="tablist" aria-multiselectable="true">
                <?php foreach($contribution_faqs as $key => $faq): $num=$key+1?>
                    <div class="card">
                        <div class="card-header" role="tab" id="contr<?= $num ?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion7" href="#cntr<?= $num ?>" aria-expanded="true" aria-controls="cntr<?= $num ?>">
                                    <?= $faq['title'] ?>
                                </a>
                            </h5>
                        </div>
                        <div id="cntr<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="cntr<?= $num ?>">
                            <div class="card-block">
                                <?= $faq['content'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="col-12">
            <h3 class="text-center">FAQs on Retirement</h3>
            <div id="accordion9" role="tablist" aria-multiselectable="true">
                <?php foreach($retirement_faqs as $key => $faq): $num=$key+1?>
                    <div class="card">
                        <div class="card-header" role="tab" id="retr<?= $num ?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion7" href="#ret<?= $num ?>" aria-expanded="true" aria-controls="ret<?= $num ?>">
                                    <?= $faq['title'] ?>
                                </a>
                            </h5>
                        </div>
                        <div id="ret<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="ret<?= $num ?>">
                            <div class="card-block">
                                <?= $faq['content'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="col-12">
            <h3 class="text-center">FAQs on Retiree Fund</h3>
            <div id="accordion10" role="tablist" aria-multiselectable="true">
                <?php foreach($retiree_funds_faqs as $key => $faq): $num=$key+1?>
                    <div class="card">
                        <div class="card-header" role="tab" id="retrf1<?= $num ?>">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion7" href="#retf<?= $num ?>" aria-expanded="true" aria-controls="retf<?= $num ?>">
                                    <?= $faq['title'] ?>
                                </a>
                            </h5>
                        </div>
                        <div id="retf<?= $num ?>" class="collapse <?= ($key == 0) ? 'show' : '' ?>" role="tabpanel" aria-labelledby="retrf1<?= $num ?>">
                            <div class="card-block">
                                <?= $faq['content'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
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