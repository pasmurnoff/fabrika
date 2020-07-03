export default function () {
    const dropdown = '[data-attribute_name]:not([data-attribute_name="attribute_pa_cvet"], select)',
        selector = dropdown + ' .wcvs-swatch';
    let $current = $('<div class="swatches__current-value"></div>');

    $current.html($(selector + '.selected').data('value'))
    $(dropdown).parent().prepend($current)


    /* Choice size */
    $(document).on('click', selector, function () {
        $current.html($(this).data('value'));
    })

    /* Toggle dropdown */
    $current.on('click', function () {
        $(dropdown).toggleClass('active_dropdown');
        $(this).toggleClass('active')
    })

    $(document).mouseup(function (e) {
        if ($current.has(e.target).length === 0) {
            $(dropdown).removeClass('active_dropdown');
            $current.removeClass('active');
        }
    });
}