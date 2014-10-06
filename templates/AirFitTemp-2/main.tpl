<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
{headers}
<link rel="shortcut icon" href="{THEME}/images/favicon.ico" />
<link media="screen" href="{THEME}/style/styles.css" type="text/css" rel="stylesheet" />
<link media="screen" href="{THEME}/style/mycss.css" type="text/css" rel="stylesheet" />

<link media="screen" href="{THEME}/style/engine.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{THEME}/js/libs.js"></script>
<script type="text/javascript" src="{THEME}/js/vh-libs.js"></script>
</head>
<body>
{AJAX}
<div id="vh-main-wrapper">
    <div class="vh-top-line"> 
         <div class="vh-wrapper-990"> 
             <div class="vh-top-phone"> <span>+7 (707) 789 30 56</span> </div>
                          
             
             
             <div class="slogan"> Растяжки, Силовые упражнения и детские качели в одном гамаке </div>
              
             <div class="z-phone"> 
                <a href="#">
                <div class="callme_view"> Заказать звонок </div>
                </a>
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
        <div class="vh-slider-container"> </div>
    </div> <!-- vh-slider -->
    
    <div class="vh-content-wrapper">  
        <div class="vh-wrapper-m1050">
            <div class="vh-wrapper-990">
                <div class="vh-crumbs">{speedbar} </div>
                <div class="vh-content-box">
                  <div class="vh-left-box"> g </div>
                  <div class="vh-right-box"> {content}</div>
                  <div class="clear"> </div>
                </div>
            </div>
        </div>
    
    </div> <!-- vh-content -->

</div> <!-- main wrapper  -->
</body>
</html>