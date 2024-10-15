$(document).ready(function(){
    $('.Activa').hide();
    $('.Dato').hide();
    $('.Btn_datos').on('click',function(){ 
        $('.Activa').slideToggle(750);
        $('.Dato').hide();
    });
    
    $('.Activa').on('click',function(){       
       var x=$('.Activa').index(this);
       var y=$('.Dato').eq(x);
        y.slideToggle();
        
    });    
        
        
    
});