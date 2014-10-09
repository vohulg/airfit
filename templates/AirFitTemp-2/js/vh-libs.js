function slid()
{
     $("#slider").cycle({
       fx:"fade",
       speed: 3000,
       timeout: 4000,
       pause: 1
    })
}

function linkhover_mainmenu()
{
    var currentPath = location.href;
    var arr = new Array();
    $("a.vh-menu-item").each(function () {
        arr.push($(this).attr("href"));        
    });    
    for (var i=0; i < arr.length; i++)
    {
        var path = "http://" + location.hostname + arr[i];
        if (currentPath == path)  
        {
            $(".main-menu li").removeClass("active");
            $(".main-menu li").eq(i).addClass("active");            
        }     
        
    } 
}

function linkhover_leftmenu()
{
    var currentPath = location.href;
    var arr = new Array();
    $("a.vh-menu-item-l").each(function () {
        arr.push($(this).attr("href"));        
    });    
    for (var i=0; i < arr.length; i++)
    {
        var path = "http://" + location.hostname + arr[i];
        if (currentPath == path)  
        {
            $(".left-menu li").removeClass("active");
            $(".left-menu li").eq(i).addClass("active");            
        }     
        
    } 
}

 
$(document).ready(function(){
    
    slid();
    linkhover_mainmenu();  
    linkhover_leftmenu();
    
});