$(document).ready(function()
{

    /*Slider heihjt*/
    var windowHeight=$(window).height(),
    uppernavHeight= $('.upper-bar').innerHeight(),
    navbarHeight=$('.navbar').innerHeight();
    $('.slider,.carousel-inner,.carousel-item').height(windowHeight-(uppernavHeight+navbarHeight));

    /*Feature-eorked shuffle of Images*/
    $('.featured-work ul li').on('click',function (){
    $(this).addClass('active').siblings().removeClass('active');

    if($(this).data('class')==='.all') 
    {
     $('.shuffle-images .col-md').css('opacity', 1);
    }
    
    else{
     $('.shuffle-images .col-md').css('opacity', '.08'); 
     $($(this).data('class')).parent().css('opacity', 1);
    }
     
    });
});