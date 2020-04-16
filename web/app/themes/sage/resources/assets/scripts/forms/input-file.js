$('.file-upload').on('change', function () {
    let files = $(this).get(0).files;
    let names = $.map(files, function (val, i) {
        return files.length === i + 1 ? val.name : val.name + ', ';
    });
    $(this).next().html(names);
});