$(document).ready(function(){
  $(".main-menu li").click(function(){
    $(".main-menu li").removeClass("active");
      $(this).addClass("active");
  });
});


