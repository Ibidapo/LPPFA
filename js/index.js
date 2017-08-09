$(document).ready(function(){

    //Animation Initialization
    AOS.init({
        offset:100,
        duration:1000,
        easing: 'ease-in-sine'
    });

    $(".dropdown").hover(function() {
            $('.dropdown-menu', this).stop( true, true ).fadeIn("normal").css('display', 'inline-flex');
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeOut("normal");
            $(this).toggleClass('open');
    });

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('#back-top, #share, #print').fadeIn();
        }else{
            $('#back-top, #share, #print').fadeOut();
        }
    });

    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

    $('#back-top').click(function() {
        $('body,html').animate({
            scrollTop : 0
        }, 500);
    });

    $('#scroll-btn').click(function() {
        $('body,html').animate({
            scrollTop : 500
        }, 800);
    });

    $('.mob-search input').blur(function() {
        setTimeout(function(){
        $('.m-logo').css('display','block')}, 500);
    }).focus(function() {
        $('.m-logo').css('display','none');
    });

    document.getElementById("date").innerHTML = moment().format("Do MMMM, YYYY.");
});