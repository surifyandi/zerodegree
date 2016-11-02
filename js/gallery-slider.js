$(document).ready(function(){ 

  //event trigger popup item slide
  $(".slider-gallery .row-gallery a").click(function(e){
    $(".popup-gallery").addClass("active");
    e.preventDefault();
  });

  //event close popup slide
  $(".popup-gallery .close-button").click(function(){
    $(".popup-gallery").removeClass("active");
  });

  //event prev control slide trigger
  $(".slider-gallery .control .left").click(function(){

    $(".slider-gallery .row-gallery a").each(function(){
      var newValueAtt = + $(this).attr("data-slide") + 1;
      if(newValueAtt == 6){
        newValueAtt = 1;
        $(this).attr("data-slide", newValueAtt);
      }else{
        $(this).attr("data-slide", newValueAtt);
      }

      $(this).removeClass();

      if($(this).attr("data-slide") == 1){
        $(this).children(".caption").addClass("active");
      }else{
        $(this).children(".caption").removeClass("active");
      }

      $(this).addClass("data-slide-"+ newValueAtt +"");
    });
  });

  //event next control slide trigger
  $(".slider-gallery .control .right").click(function(){

    $(".slider-gallery .row-gallery a").each(function(){
      var newValueAtt = $(this).attr("data-slide") - 1;
      if(newValueAtt == 0){
        newValueAtt = 5;
        $(this).attr("data-slide", newValueAtt);
      }else{
        $(this).attr("data-slide", newValueAtt);
      }

      $(this).removeClass();

      if($(this).attr("data-slide") == 1){
        $(this).children(".caption").addClass("active");
      }else{
        $(this).children(".caption").removeClass("active");
      }

      $(this).addClass("data-slide-"+ newValueAtt +"");
    });
  });
});
