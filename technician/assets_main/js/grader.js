const gradeValidate = () => {
    if($('.grade:checked').length == ''){
        $('#gradeError').html('Grade is required');
        $('#gradeError').css('display','block');
        $('.grade').addClass('is-invalid');
        $('.grade').focus();
        return false;
    }else{
        $('#gradeError').css('display','none');
        $('.grade').removeClass('is-invalid');
        $('.grade').addClass('is-valid');
        return true;
    }
}
$('.grade').on('input', function(){
    gradeValidate();
});