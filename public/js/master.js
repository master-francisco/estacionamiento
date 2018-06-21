var $avatarInput, $avatarImage, $avatarForm;
var avatarUrl;
    $(function(){
        $avatarInput = $('#avatarInput');
        $avatarImage = $('#avatarImage');

    $avatarImage.on('click',function(){
        alert('funcion no disponible');
    });

    avatarUrl = $('avatarForm').attr('action');
    $avatarInput.on('change',function(){
      
    });
});
    //profile ->informacion
    $(".nombre-input").hide();
    $(".apellido-input").hide();
    $(".carrera-input").hide();
    $(".grado-input").hide();
    $(".turno-input").hide();
    $(".number-input").hide();
    $(".buttons").hide();
    $(document).ready(function(){
       $("#show").click(function(){
        $(".nombre-input").show();
       });
    });
    $(document).ready(function(){
        $("#show").click(function(){
         $(".apellido-input").show();
        });
     });
     $(document).ready(function(){
        $("#show").click(function(){
         $(".carrera-input").show();
        });
     });
     $(document).ready(function(){
        $("#show").click(function(){
         $(".grado-input").show();
        });
     });
     $(document).ready(function(){
        $("#show").click(function(){
         $(".turno-input").show();
        });
     });
     $(document).ready(function(){
        $("#show").click(function(){
         $(".number-input").show();
        });
     });
     $(document).ready(function(){
        $("#show").click(function(){
         $(".buttons").show();
        });
     });
     $(document).ready(function(){
        $("#cancelar").click(function(){
            $(".nombre-input").hide();
            $(".apellido-input").hide();
            $(".carrera-input").hide();
            $(".grado-input").hide();
            $(".turno-input").hide();
            $(".buttons").hide();
            $(".number-input").hide();
        });
     });
     //profile ->vehiculo
     $(".marca-input").hide();
     $(".modelo-input").hide();
     $(".color-input").hide();
     $(".placas-input").hide();
     $(".año-input").hide();
     $(".buttons-vehiculos").hide();

     $(document).ready(function(){
        $("#show1").click(function(){
         $(".marca-input").show();
        });
     });
     $(document).ready(function(){
        $("#show1").click(function(){
         $(".modelo-input").show();
        });
     });
     $(document).ready(function(){
        $("#show1").click(function(){
         $(".color-input").show();
        });
     });
     $(document).ready(function(){
        $("#show1").click(function(){
         $(".placas-input").show();
        });
     });
     $(document).ready(function(){
        $("#show1").click(function(){
         $(".año-input").show();
        });
     });
     $(document).ready(function(){
        $("#show1").click(function(){
         $(".buttons-vehiculos").show();
        });
     });
     $(document).ready(function(){
        $("#cancelar-v").click(function(){
            $(".marca-input").hide();
            $(".modelo-input").hide();
            $(".color-input").hide();
            $(".placas-input").hide();
            $(".año-input").hide();
            $(".buttons-vehiculos").hide();
        });
     });
     $('.clockpicker').clockpicker('show');
     $('.container-a').hide();
 
     $('.container-sr').hide();
 
 var lugares = document.querySelectorAll('.space');
    lugares.forEach(function(lugar) {
        lugar.addEventListener('click', function(event) {
            var element = event.target;
            var { hora_entrada, hora_salida, status } = element.dataset;
            $('#hora_entrada').val(element.dataset.hora_entrada);
            $('#hora_salida').val(element.dataset.hora_salida);
            $('#status').val(element.dataset.status);
            $('#name').val(element.dataset.name);
            $('#placas').val(element.dataset.placas);
            $('#modal_user').modal();
            if(hora_entrada && hora_salida && status){
            $('#ap').hide();
            $('#info').html('Este lugar ya ha sido ocupado');
            }else{
                $('#ap').show();
                $('#info').html('');
            }
               
            $('#modal_space').modal();
        });
    });