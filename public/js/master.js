var $avatarInput, $avatarImage, $avatarForm;
var avatarUrl;
    $(function(){
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

$('#login-btn').attr('disabled','disabled');
$( '#check-condiciones' ).on( 'click', function() {
    if( $(this).is(':checked') ){
       $('#login-btn').removeAttr('disabled');
    } else {
        $('#login-btn').attr('disabled','disabled');
    }
});
 
     $('.clockpicker').clockpicker('show');
 
 var lugares = document.querySelectorAll('.space');
    lugares.forEach(function(lugar) {
        lugar.addEventListener('click', function(event) {
            var element = event.target;
            var { hora_entrada, hora_salida, status, placas, name } = element.dataset;
            $('#hora_entrada').val(element.dataset.hora_entrada);
            $('#hora_salida').val(element.dataset.hora_salida);
            $('#status').val(element.dataset.status);
            $('#name').val(element.dataset.name);
            $('#nombre-lugar').val(element.dataset.nombre);
            $('#placas').val(element.dataset.placas);
            $('#modal_user').modal();
            if(!name & !placas){
                $('#ap').show();
                $('#info').html('');
            }else{
                $('#ap').hide();
                $('#info').html('Este lugar ya ha sido ocupado');
            } 
               
            $('#modal_space').modal();
        });
    });

