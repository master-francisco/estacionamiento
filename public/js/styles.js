$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});
$(document).ready(function() {
    $('#example').DataTable();
});
$('#user-edit').on('click',function(){
    $('#moda_user').modal();
});
