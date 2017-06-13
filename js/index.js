//sub-navigation panel end
$(document).ready(function(){
 //Products&Services
  $("#ps-link, #ps-list, #sub-nav1").mouseover(function(){
    $("#ps-nav, #sub-nav1").show("slow");
  });
  $("#ps-link, #ps-list, #sub-nav1").mouseout(function(){
     $("#ps-nav, #sub-nav1").hide("slow");
  });
 //Our Company
  $("#company-link, #company-list,#sub-nav2").mouseover(function(){
     $("#sub-nav2, #company-nav").show(5000)
       $("#company-link, #company-list, #sub-nav2").mouseout(function(){
         $("#sub-nav2, #company-nav").hide(5000)
      });
    });
  //Investment
  $("#invest-link, #invest-list,#sub-nav3").mouseover(function(){
       $("#sub-nav3, #invest-nav").show(5000)
         $("#invest-link, #invest-list, #sub-nav3").mouseout(function(){
           $("#sub-nav3, #invest-nav").hide(5000)
        });
      });
  //News
  $("#news-link, #news-list,#sub-nav4").mouseover(function(){
       $("#sub-nav4, #news-nav").show(5000)
         $("#news-link, #news-list, #sub-nav4").mouseout(function(){
           $("#sub-nav4, #news-nav").hide(5000)
        });
      });
  //Downloads
  $("#dload-link, #dload-list,#sub-nav5").mouseover(function(){
       $("#sub-nav5, #dload-nav").show(5000)
         $("#dload-link, #dload-list, #sub-nav5").mouseout(function(){
           $("#sub-nav5, #dload-nav").hide(5000)
        });
      });
  //contact
  $("#contact-link, #contact-list,#sub-nav6").mouseover(function(){
       $("#sub-nav6, #contact-nav").show(5000)
         $("#contact-link, #contact-list, #sub-nav6").mouseout(function(){
           $("#sub-nav6, #contact-nav").hide(5000)
        });
      });
});
//sub-navigation panel end


//navigation controllers

$(document).ready(function(){

 $(document).on("mousewheel", function(){
     if ($(document).scrollTop() > 200 ){
         $('#style3').hide('slow');
          $('#style2').show('slow');
     }else{
     $('#style3').show('slow');
     $('#style2').hide('slow');
     }

 });

});
