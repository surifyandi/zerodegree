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
  $(".latest-articles article").mouseenter(function(){
    $(this).addClass("active");
  });

  $(".latest-articles article").mouseleave(function(){
    $(this).removeClass("active");
  });


  //detail popup
  $(".latest-articles article").click(function(){
    $(".detail-popup").addClass("active");
  });

  $(".detail-popup .close-button").click(function(){
  });

  $(".popular-destination .destination").click(function() {
    $(".detail-popup").addClass("active");
  });


  // hover popular destination
  $(".popular-destination .destination").mouseenter(function() {
    $(this).addClass("active");
  });

  $(".popular-destination .destination").mouseleave(function() {
    $(this).removeClass("active");
  });
});
