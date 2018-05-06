var $avatarInput, $avatarImage;
    $(function(){
        $avatarInput = $('#avatarInput');
        $avatarImage = $('#avatarImage');

    $avatarImage.on('click',function(){
        $avatarInput.click();
    });
});
