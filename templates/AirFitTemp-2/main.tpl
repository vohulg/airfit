<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta property="fb:admins" content="100000623511943"/>
    <meta property="fb:app_id" content="285213041670598"/>
    
{headers}
<link rel="shortcut icon" href="{THEME}/images/favicon.ico" />
<link media="screen" href="{THEME}/style/styles.css" type="text/css" rel="stylesheet" />
<link media="screen" href="{THEME}/style/mycss.css" type="text/css" rel="stylesheet" />
<link media="screen" href="{THEME}/style/menu.css" type="text/css" rel="stylesheet" />

<link media="screen" href="{THEME}/style/engine.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{THEME}/js/libs.js"></script>

<script type="text/javascript" src="{THEME}/js/vh-libs.js"></script>

<script type="text/javascript" src="{THEME}/js/call.js"></script>
<link media="screen" href="{THEME}/style/call.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
<script type="text/javascript"> VK.init({apiId: 4581679, onlyWidgets: true});</script>

<script type="text/javascript" src="{THEME}/js/jquery.cycle.all.min.js"></script>

</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
{AJAX}
<div id="vh-main-wrapper">
    <div class="vh-top-line"> 
         <div class="vh-wrapper-990"> 
             <div class="vh-top-phone"> <span>+7 (707) 789 30 56</span> </div>
                 <!-- <div><a href="http://www.facebook.com/YogaVvozduhe?fref=ts"><img src="{THEME}/images/fb.jpg" alt="31" border="0" height="30" width=""></a> </div>   -->     
             
             
             <div class="slogan"> Растяжки, Силовые упражнения и детские качели в одном гамаке </div>
              
             <div class="z-phone"> 
                               <div class="callme_view"><a class="call-open" href="#">Заказать звонок</a> </div>   
                
             </div>
             <div class="clear"> </div>
         
         </div> <!-- wrapper-990 -->
    </div> <!-- top-line -->
    
    
    <div class="vhg-header">   
        <div class="vh-wrapper-990">            
                <a class="vh-logo" href="/"><img alt="Йога и фитнес в воздухе" src="{THEME}/images/Logotip_2.jpg"  ></a>            
            {include file="topmenu.tpl"}
        </div>
    </div> <!-- vh-header -->
    
    <div class="vh-slider-wrapper">  

         <div id="vh-slider-container"> 
            <div id="slider">
             <img alt="Йога и фитнес в воздухе" src="{THEME}/images/slider-1.jpg"  >      
              <img alt="Йога и фитнес в воздухе" src="{THEME}/images/slider-1.jpg"  >  
            </div>
         </div> 
    </div> <!-- vh-slider -->
    
   
    
    
    <div class="vh-content-wrapper">  
        <div class="vh-wrapper-m1050">            
            <div class="vh-wrapper-990">
                
                <!-- блок на главной странице -->
                [aviable=main]
                    <div class="target landpage">
                        <div class="vh-fb-title">Для чего используется </div> 
                        {include file="plus-menu.tpl"}
                    
                    </div>   
                    <div class="landpage">
                        <div class="vh-fb-title">Как можно использовать </div>
                        {include file="plus-menu-centre.tpl"}
                    
                    </div> 
                    <div class="vh-fb landpage-right"> 
                        <div class="vh-fb-title">отзывы о гамаках </div>
                        <div class="fb-comments" data-href="http://airfit.kz" data-width="300" data-numposts="2" data-colorscheme="light"></div>
                        
                    </div>
                     <div class="clear"> </div>   
                        
                        [/aviable]
                
                [not-aviable=main]
                <div class="vh-crumbs">{speedbar} </div>
                <div class="vh-content-box">                    
                    <div class="vh-left-box"> {include file="sidebar.tpl"} </div>
                    <div class="vh-right-box"> {info}{content}</div>
                    <div class="clear"> </div>
                </div>
                [/not-aviable]    
                    
            </div>
        </div>
    
    </div> <!-- vh-content -->
    
    
    
    <hr id="hr-footer">
    <div class="vh-footer-menu"> <div class="vh-wrapper-990"> 
            <div class="vh-social">
                <a class="vh-soc-vk" href="/"><img alt="Йога и фитнес в воздухе vkontakte" src="{THEME}/images/my/vk.png"  ></a>
            
            </div>
                <div class="vh-social">
                <a class="vh-soc-vk" href="/"><img alt="Йога и фитнес в воздухе vkontakte" src="{THEME}/images/my/facebook.png"  ></a>
            
            </div>
            <div class="vh-footer-down-menu">
                <a href="/">Купить гамак</a>
                |
                <a href="/">Купить гамак</a>
                |
                <a href="/">Купить гамак</a>
                |
                <a href="/">Купить гамак</a>
                
            </div></div> </div>
    <div class="vh-footer"> 
        
    </div> 
                    <div class="clear"> </div>
        <div class="vh-wrapper-990">
            <div class="vh-cop"> © 2014 Центр развития  «AirFit». ИП "Сорокина Мария Владимировна" Свидетельство № 07987655443. Все права защищены. </div>
            <div class="vh-sitecom"> Создание сайта vk.com/vohulg. +7 701 519 63 02 </div>
            <div class="clear"> </div>
        </div>
            
    </div>


</div> <!-- main wrapper  -->
{include file="tcse_mod/call.tpl"}


</body>
</html>