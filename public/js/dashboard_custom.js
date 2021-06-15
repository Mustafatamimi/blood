$(function (){
    'use strict';
    /* translate in diffrent list in right sidebar*/
     $('.sidebar ul li').on('click',function (){
     $(this).addClass('active').siblings().removeClass('active');          
     });

     /*translate in diffrent list in top nav-bar users*/
     $('.nav-content-operation-users ul li').on('click',function (){
     $(this).addClass('active').siblings().removeClass('active');  
       var x= $(this).attr("id") 
       tabsuser(x);
        });
      /*for display content when click at element in navbar users*/ 
      var x=0;
      const tab=document.querySelectorAll('.tabuser');
      function tabsuser(panelIndex){
              tab.forEach(function(node) {
                 node.style.display= 'none';
          });
          tab[panelIndex].style.display= 'block';
      }
      tabsuser(x);
    
     /*translate in diffrent list in top nav-bar hospitals*/
     $('.nav-content-operation-hospital ul li').on('click',function (){
        $(this).addClass('active').siblings().removeClass('active');  
          var x= $(this).attr("id") 
          tabshospital(x);
           });
         /*for display content when click at element in navbar hospitals*/ 
         var x=0;
         const tab2=document.querySelectorAll('.tabhospital');
         function tabshospital(panelIndex){
                 tab2.forEach(function(node) {
                    node.style.display= 'none';
             });
             tab2[panelIndex].style.display= 'block';
         }
         tabshospital(x);

     /*translate in diffrent list in top nav-bar donors*/
     $('.nav-content-operation-donors ul li').on('click',function (){
        $(this).addClass('active').siblings().removeClass('active');  
          var x= $(this).attr("id") 
          tabsdonor(x);
           });
         /*for display content when click at element in navbar donors*/ 
         var x=0;
         const tab3=document.querySelectorAll('.tabdonor');
         function tabsdonor(panelIndex){
                 tab3.forEach(function(node) {
                    node.style.display= 'none';
             });
             tab3[panelIndex].style.display= 'block';
         }
         tabsdonor(x);

    
     /*translate in diffrent list in top nav-bar seekers*/
     $('.nav-content-operation-seekers ul li').on('click',function (){
        $(this).addClass('active').siblings().removeClass('active');  
          var x= $(this).attr("id") 
          tabsseeker(x);
           });
         /*for display content when click at element in navbar seeker*/ 
         var x=0;
         const tab4=document.querySelectorAll('.tabseeker');
         function tabsseeker(panelIndex){
                 tab4.forEach(function(node) {
                    node.style.display= 'none';
             });
             tab4[panelIndex].style.display= 'block';
         }
         tabsseeker(x);

    /*for display operation when click on main-right-elements-sidbar*/
        /*main div*/
        var div_cards= document.getElementById("div-cards");
        var div_users= document.getElementById("div-users");
        var div_hospital= document.getElementById("div-hospital");
        var div_donors= document.getElementById("div-donors");
        var div_seekers= document.getElementById("div-seekers");
        var div_margin_top=document.getElementById("main");

        $('.sidebar ul #sid-dashboard').on('click',function (){
            div_margin_top.style.marginTop="75px";
            div_cards.style.display="grid";   
            div_users.style.display="none"; 
            div_hospital.style.display="none"; 
            div_donors.style.display="none"; 
            div_seekers.style.display="none"; 
            });
        $('.sidebar ul #sid-users').on('click',function (){
            div_margin_top.style.marginTop="60px";
            div_cards.style.display="none";   
            div_users.style.display="inline"; 
            div_hospital.style.display="none"; 
            div_donors.style.display="none"; 
            div_seekers.style.display="none";    
            });
        $('.sidebar ul #sid-hospital').on('click',function (){
            div_margin_top.style.marginTop="60px";
            div_cards.style.display="none";   
            div_users.style.display="none"; 
            div_hospital.style.display="inline"; 
            div_donors.style.display="none"; 
            div_seekers.style.display="none";    
            });
        $('.sidebar ul #sid-donors').on('click',function (){
            div_margin_top.style.marginTop="60px";
            div_cards.style.display="none";   
            div_users.style.display="none"; 
            div_hospital.style.display="none"; 
            div_donors.style.display="inline"; 
            div_seekers.style.display="none";    
             });
         $('.sidebar ul #sid-seekers').on('click',function (){
            div_margin_top.style.marginTop="60px";
            div_cards.style.display="none";   
            div_users.style.display="none"; 
            div_hospital.style.display="none"; 
            div_donors.style.display="none"; 
            div_seekers.style.display="inline";    
             });
    

});