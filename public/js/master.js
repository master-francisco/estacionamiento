/* metodo utilizado para hacer el cambio de una imagen 
segun lo que ingresa el usuario */
var $avatarInput, $avatarImage, $avatarForm;
var avatarUrl;
    $(function(){
        //variables que guardan lo que hay en elementos html
        $avatarInput = $('#avatarInput');
        $avatarImage = $('#avatarImage');
        $avatarForm = $('#avatarForm');

    $avatarImage.on('click',function(){
        $avatarInput.trigger('click');
    });

    $avatarInput.on('change', function() {
        $avatarForm.submit();
    });

    avatarUrl = $('avatarForm').attr('action');;
});
/* evento query para desabilitar un boton hasta que 
otro evento suceda */
/*$('#login-btn').attr('disabled','disabled');
$( '#check-condiciones' ).on( 'click', function() {
    if( $(this).is(':checked') ){
       $('#login-btn').removeAttr('disabled');
    } else {
        $('#login-btn').attr('disabled','disabled');
    }
});*/
 
     $('.clockpicker').clockpicker('show');
 
 var lugares = document.querySelectorAll('.space');
    lugares.forEach(function(lugar) {
        lugar.addEventListener('click', function(event) {
            var element = event.target;
            var { a, hora_entrada, hora_salida, status, placas, name , id } = element.dataset;
            $('#hora_entrada').val(element.dataset.hora_entrada);
            $('#hora_salida').val(element.dataset.hora_salida);
            $('#status').val(element.dataset.status);
            $('#name').val(element.dataset.name);
            $('#lugar').val(element.dataset.lugar);
            $('#placas').val(element.dataset.placas);
            $('#id').val(element.dataset.id);
            $('#modal_user').modal();
            $('#user').val(element.dataset.id);
            $('#id_lugar').val(element.dataset.idl);
            if(a) {
                if(!id){
                    $('#ap').show();
                    $('#info').html('');
                }else{
                    $('#ap').hide();
                    $('#info').html('Este lugar ya ha sido ocupado');   
                } 
            } else {
                $('#ap').hide();
                $('#info').html('Ya tienes un lugar asignado');
            }
               
            $('#modal_space').modal();
        });
    });

    

