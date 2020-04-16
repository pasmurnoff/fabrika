$('.file-upload').on('change', function () {
    console.log($(this).val());
    let path = $(this).val().split('\\');
    $(this).next('.input__file_result').text(path[path.length - 1]);
});