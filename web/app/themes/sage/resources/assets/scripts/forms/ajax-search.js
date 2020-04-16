function dataList() {
    let $search = $(this);
    let $list = $search.next();
    if ($search.val() !== '') {
        $list.addClass('active');
        $.ajax({
            url: window.wp_data.ajax_url,
            type: 'post',
            data: {
                action: 'data_fetch',
                keyword: $search.val(),
            },
            success: function (data) {
                $list.html(data);
            },
            error: function () {
                console.log('ooops');
            },
        });
    } else {
        $list.removeClass('active');
        $list.html('');
    }
}

$('.search__input').on('keyup', dataList);
