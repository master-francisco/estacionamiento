var $avatarInput, $avatarImage, $avatarForm;
var avatarUrl;
    $(function(){
        $avatarInput = $('#avatarInput');
        $avatarImage = $('#avatarImage');

    $avatarImage.on('click',function(){
        $avatarInput.click();
    });

    avatarUrl = $('avatarForm').attr('action');
    $avatarInput.on('change',function(){
        var formData = new FormData();
        formData.append('image',$avatarInput[0].files[0]);
       $.ajax({
        url: avatarUrl,
        method: 'POST',
        data:formData,
        processData: false,
        contentType:false
       })
       .done(function(data){
        alert('hi');
       })
       .fail(function(){
        console.log('el elemento no se puede subir');
       });
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