$(document).ready(function()
{

    /* for translate in navbar user-profile*/
     $('.nav_content ul li').on('click',function (){
     $(this).addClass('active').siblings().removeClass('active');  
       var x= $(this).attr("id") 
       tabs(x);
        });
    
     /*for display content when click at element in navbar user-profile*/ 
     var x=0;
     const tab=document.querySelectorAll('.tab');
     function tabs(panelIndex){
             tab.forEach(function(node) {
                node.style.display= 'none';
         });
         tab[panelIndex].style.display= 'block';
     }
     tabs(x);
    
    
});