export default function generateProductPdf()
{
    $('#download__pdf-form').submit(
        function (e) {
            e.preventDefault();
            let product_id = $('#download__pdf-id').val();
            $.ajax({
                url: window.wp_data.ajax_url,
                method: 'post',
                data: {
                    action: 'ajax_pdf_order',
                    product_id: product_id,
                },
                success: function (response) {
                    const result = $.parseJSON(response);
                    if (result.url !== 'undefined') {
                        $('body').append('<a href="' + result.url +'" class="productPdfLink" download style="display:none;"></a>');
                        let link = $('.productPdfLink');
                        link[0].click();
                        link.remove();
                    }
                },
            });
        }
    );
}
