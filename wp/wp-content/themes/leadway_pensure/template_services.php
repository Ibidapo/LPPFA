<?php /* Template Name: Services */ ?>

<?php
$services = get_field('services');

?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container" id="m-top">
    <div class="row">
        <div class="hidden-md-up col-12 m-prod-list">
            <form class="mx-auto">
                <div class="form-group text-center">
                    <label for="s-prod">Our Services</label>
                    <select class="form-control" id="s-prod" data-aos="fade">
                        <?php foreach ($services as $key => $service):
                            $id = slugify($service['title']) . "-$key";
                            ?>
                            <option value="<?= $id ?>"><?= $service['title'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 prod-banner">
            <?php foreach ($services as $key => $service):
                $imgClass = "image-" . slugify($service['title']) . "-$key";
                ?>
                <img src="<?= $service['image']['url'] ?>" class="<?= $imgClass ?> <?= $slug = strtolower($service['image']['title']) ?>-img <?= $slug == "pms" ? "sms-img" : ''?> service__img">
            <?php endforeach ?>
        </div>
    </div>
    <div class="row tab-content">
        <?php foreach ($services as $key => $service):
            $id = slugify($service['title']) . "-$key";
            ?>
            <div class="col-12 col-md-9 fade show tab-pane <?= $key == 0 ? 'active' : '' ?>" role="tabpanel" id="<?= $id ?>">
                <?= $service['content'] ?>
            </div>
        <?php endforeach ?>

        <ul class="hidden-sm-down col-md-3 nav flex-column" role="tablist" id="prod-list">
            <?php foreach ($services as $key => $service):
                $id = slugify($service['title']) . "-$key";
                ?>
                <li class="nav-item <?= $key == 0 ? 'show' : '' ?>">
                    <a class="nav-link <?= $key == 0 ? 'active' : '' ?>" data-toggle="tab" href="#<?= $id ?>" role="tab">
                        <?= $service['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>


<?php get_footer(); ?>
<script>
    $(document).ready(function() {

        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $("#m-top").attr("class", "container-fluid");
        } else {
            $("m-top").attr("class", "container");
        }

        $('#prod-list a[href="'+ window.location.hash+ '"]').tab('show', function(){
            $('body,html').animate({
                scrollTop : 0
            }, 500);
        }); // Select tab by name if provided in location hash

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).closest('ul').find('.show').removeClass('show');
            $(this).parent().addClass('show');
            $('body,html').animate({
                scrollTop : 0
            }, 500);
        });

        <?php foreach ($services as $key => $service) {
        $id = slugify($service['title']) . "-$key";
        $imgClass = "image-" . slugify($service['title']) . "-$key";
        ?>
        $('a[href="#<?= $id ?>"]').on('shown.bs.tab', function() {
            $('.service__img').css('display','none');
            $('.<?= $imgClass ?>').css('display','block');
        });
        <?php } ?>

        $("#s-prod").change(function (){
            var id = $(this).val();
            $('a[href="#'+ id +'"]').tab('show');
        });

        $(".dropdown-menu.ps a:first-child").click(function(){
            $('a[href="#retirement-savings-account-0"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(2)").click(function(){
            $('a[href="#additional-voluntary-contribution-1"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(3)").click(function(){
            $('a[href="#cross-border-services-3"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(4)").click(function(){
            $('a[href="#managed-funds-2"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(5)").click(function(){
            $('a[href="#nsitf-4"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(6)").click(function(){
            $('a[href="#personal-messaging-services-5"]').tab('show');
    });

        $('#sms-slide').on('slide.bs.carousel', function (e){
            var id = e.relatedTarget.id;
            id = parseInt(id);
            switch (id) {
                case 1:
                    $('.bal-txt, .stm-txt, .help-txt').hide();
                    $('.pin-txt').show();
                    break;
                case 2:
                    $('.pin-txt, .stm-txt, .help-txt').hide();
                    $('.bal-txt').show();
                    break;
                case 3:
                    $('.pin-txt, .bal-txt, .help-txt').hide();
                    $('.stm-txt').show();
                    break;
                case 4:
                    $('.stm-txt, .pin-txt, .bal-txt').hide();
                    $('.help-txt').show();
                    break;
            }
        });

        $('#sms-area').mouseenter(function(){
            if( !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
                $('#sms-slide').carousel('pause');
                $('#sms-slide .carousel-control-next, #sms-slide .carousel-control-prev').css('display', 'flex');
            }
        }).mouseleave(function(){
            if( !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
                $('#sms-slide').carousel('cycle');
                $('#sms-slide .carousel-control-next, #sms-slide .carousel-control-prev').css('display', 'none');
            }
        });
    });
</script>

</body>
</html>