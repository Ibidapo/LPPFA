//sub-navigation panel end
$(document).ready(function(){
 //Products&Services
  $("#ps-link, #ps-list, #sub-nav1").mouseover(function(){
    $("#ps-nav, #sub-nav1").show();
  });
  $("#ps-link, #ps-list, #sub-nav1").mouseout(function(){
     $("#ps-nav, #sub-nav1").hide();
  });
 //Our Company
  $("#company-link, #company-list,#sub-nav2").mouseover(function(){
     $("#sub-nav2, #company-nav").show()
       $("#company-link, #company-list, #sub-nav2").mouseout(function(){
         $("#sub-nav2, #company-nav").hide()
      });
    });
  //Investment
  $("#invest-link, #invest-list,#sub-nav3").mouseover(function(){
       $("#sub-nav3, #invest-nav").show()
      });
      $("#invest-link, #invest-list, #sub-nav3").mouseout(function(){
                 $("#sub-nav3, #invest-nav").hide()
              });
  //News
  $("#news-link, #news-list,#sub-nav4").mouseover(function(){
       $("#sub-nav4, #news-nav").show()
         $("#news-link, #news-list, #sub-nav4").mouseout(function(){
           $("#sub-nav4, #news-nav").hide()
        });
      });
  //Downloads
  $("#dload-link, #dload-list,#sub-nav5").mouseover(function(){
       $("#sub-nav5, #dload-nav").show()
         $("#dload-link, #dload-list, #sub-nav5").mouseout(function(){
           $("#sub-nav5, #dload-nav").hide()
        });
      });
  //contact
  $("#contact-link, #contact-list,#sub-nav6").mouseover(function(){
       $("#sub-nav6, #contact-nav").show()
         $("#contact-link, #contact-list, #sub-nav6").mouseout(function(){
           $("#sub-nav6, #contact-nav").hide()
        });
      });
});
//sub-navigation panel end


//navigation controllers

$(document).ready(function(){
    $(window).scroll(function() {
        if ($(document).scrollTop() > 5) {
            $('.scroll-btn').hide();
        }else{
            $('.scroll-btn').show();
        }

        if ($(document).scrollTop() > 100 ){
            $('#slider-icon').fadeOut(800);
            $('#style3').fadeOut(800);
            $('#style2').fadeIn(1000);
        }else{
            $('#style3').fadeIn(1000);
            $('#slider-icon').fadeIn(1000);
            $('#style2').fadeOut(800);
        };
    });
});


