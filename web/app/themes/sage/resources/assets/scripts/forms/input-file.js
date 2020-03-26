$('#file-upload').on('change', function () {
    let path = this.value.split('\\');
    $('.input__file_result').text(path[path.length - 1]);
});