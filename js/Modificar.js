$(document).ready(function(){

    $('.btnmod').on('click',function(){ 
        var btn=$('.btnmod').index(this);
        alert(btn);
            var cor=$('.Corr').eq(btn);
            var nom=$('.Numm').eq(btn);
            var ape=$('.Apee').eq(btn);
            var cla=$('.Claa').eq(btn);
            var rol=$('.Roll').eq(btn);
            var est=$('.Estaa').eq(btn);

            var c=cor.val();
            var n=nom.val();
            var a=ape.val();
            var cl=cla.val();
            var r=rol.val();
            var e=est.val();
            
            alert(c+n+a+cl+r+e);
            
            $.ajax({
                url:'Usuarios.php',
                data:{
                    CC:c,
                    NN:n,
                    AA:a,
                    CL:cl,
                    RR:r,
                    EE:e
                    
                },
                success: function (res) {
                    console.log(res);
                }
                
            });
    
    });
        
        
    
});