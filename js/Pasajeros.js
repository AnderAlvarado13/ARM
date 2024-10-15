$(document).ready(function(){

    let Salida, Llegada;

    $('#btn').on('click',function(){
        Salida=$('#Salida').val();
        Llegada=$('#Llegada').val();
        Fitrol="FiltroTrayecto";

        alert(Salida+" "+Llegada);
        FitroPasajero();
    });

    function FitroPasajero(){
        let url='Pasajero.php';
        $.ajax({
            url:url,
            type:"POST",
            data:{
                S:Salida,
                LL:Llegada,
                Act:Fitrol
            },
            success:function(result){
                $("").html(result);
            }
        });

    }

});