export default function (addSelector = '') {
    let dropdown = addSelector + ' [data-attribute_name]:not([data-attribute_name="attribute_pa_cvet"], select)',
        selector = dropdown + ' .wcvs-swatch';
    let $current = $(document).find(addSelector + ' .swatches__current-value'),
        $element = $(document).find(dropdown)

    $current.html($(selector + '.selected').attr('title'));


    /* Choice size */
    $(document).on('click', selector, function () {
        $current.text($(this).attr('title'));
    })

    /* Toggle dropdown */
    $current.on('click', function () {
        $element.toggleClass('active_dropdown');
        $(this).toggleClass('active')
    })

    $(document).mouseup(function (e) {
        if ($current.has(e.target).length === 0) {
            $element.removeClass('active_dropdown');
            $current.removeClass('active');
        }
    });
}