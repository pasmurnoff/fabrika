import dropdownSizes from './init'

export default function dropdownSizesForQuickView() {
    $(document).on('click', '.yith-wcqv-button', function () {
        function callSizes() {
            dropdownSizes('#yith-quick-view-modal.open')
        }

        $.ajax({
            /* eslint-disable */
            url: yith_qv.ajaxurl,
            /* eslint-enable */
            data: {
                action: 'yith_load_product_quick_view',
            },
            type: 'POST',
            success: function () {
                setTimeout(callSizes, 500);
            },
            error: function () {
                console.log('ooops')
            },
        })
    })
}