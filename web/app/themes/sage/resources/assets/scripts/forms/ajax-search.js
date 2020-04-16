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
            beforeSend: function () {
                $search.parent().addClass('loading');
            },
            success: function (data) {
                $search.parent().removeClass('loading');
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

$('.ajax-search .search__input').on('keyup', dataList);
