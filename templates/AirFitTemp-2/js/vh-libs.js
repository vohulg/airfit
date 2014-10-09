$(document).ready(function(){
    var currentPath = location.href;
     
    var arr = new Array();
    $("a.vh-menu-item").each(function () {
        arr.push($(this).attr("href"));
        
    });
    
    foreach()
    {
        
    }
    var path = "http://" + location.hostname + $("a.vh-menu-item").attr("href");
    if (currentPath == path)    
        alert(path);
    
    /*
  $(".main-menu li").click(function(){
    $(".main-menu li").removeClass("active");
      $(this).addClass("active");
  });
  */
});

$(document).ready(function(){
$("#slider").cycle({
fx: "fade",
speed: 3000,
timeout: 4000,
pause: 1
});
});


$(document).ready(function () {   
    
    var arr = new Array();
    $("a.vh-menu-item").each(function () {
        arr.push($(this).attr("href"));
        
    });
    
  });
 
