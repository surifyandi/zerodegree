$(document).ready(function(){

  //animation humberger menu
  $(".button-navigation").click(function(){
    $(this).toggleClass("clicked");
    $(".navigation").toggleClass("active");
  });

  //hover latest articles
  $(".latest-articles .article").mouseenter(function(){
    $(this).addClass("hover");
  });

  $(".latest-articles .article").mouseleave(function(){
    $(this).removeClass("hover");
  });

  //hover latest articles
  $(".latest-articles .body-articles article").mouseenter(function(){
    $(this).addClass("hover");
  });

  $(".latest-articles .body-articles article").mouseleave(function(){
    $(this).removeClass("hover");
  });

  //readmore latest articles
  $(".latest-articles .body-articles article").click(function(){
    $(".data-latest-articles").addClass("active");
  });

  //close button readmore latest articles
  $(".data-latest-articles .close-button").click(function(){
    $(".data-latest-articles").removeClass("active");
  });

});
