

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

function back_call()
{
    var name = $("#vh-name-input").val();
    var phone = $("#vh-phone-input").val();
    var time = $("#vh-time-input").val();
    var send = $("#vh-send-input").val();
        
        if (name=='' || phone ==  '')
        {
            DLEalert("Не все поля заполнены!","Ошибка");
            return;
        }
        
        $.post(dle_root + "engine/ajax/call.php",
        {
          name:name,
          phone:phone,
          time:time,
          call:send
        },
        function(data,status){
            $('.right-call').animate({width: -260}, 250);
          DLEalert("Info","Data: " + data + "\nStatus: " + status);
        });  
        
         $("#vh-name-input").val('');
        $("#vh-phone-input").val('');
        $("#vh-time-input").val('');
         
    
}


function addsubcriber(){
    
     var email = $("#vh-email-sub").val();
    var send = $("#vh-send-sub").val();
     if (email=='' || email == 'E-mail')
        {
            DLEalert("Не заполнено поле e-mail!","Ошибка");
            return;
        }
    
    
    $.post(dle_root + "engine/ajax/addsubscriber.php",{email:email, send:send, skin:dle_skin},
        function(data,status){
             if (data == 'ok' && status == 'success')
                DLEalert(" Вы успешно подписаны на новости сайта airfit.kz ", "Info");
            if (data == 'error email' && status == 'success')
                DLEalert(" Некорректный почтовый адрес ", "Info");
            
           $("#vh-email-sub").val('E-mail');  
        }); 
    

}




$(document).ready(function(){
    
    slid();
    linkhover_mainmenu();  
    linkhover_leftmenu();    
    

    $(".z-call-btn").click(function(){ back_call();   });
    
     $("#vh-but-sub").click(function(){  addsubcriber(); });    
     
    $("#vh-email-sub").click(function(){ $("#vh-email-sub").val('');   });
    
       

   
    
});



