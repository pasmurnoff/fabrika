function generateProductPdf()
{
    $('#download__pdf-form').submit(
        function (e) {
            e.preventDefault();
            let vinni = $('#download__pdf-id').val();
            $.ajax({
                url: window.wp_data.ajax_url,
                method: 'post',
                data: {
                    action: 'ajax_pdf_order',
                    product_id: vinni,
                },
                success: function (response) {
                    //alert(response);
                    $('body').append('<a href="/app/uploads/price-list/filename.pdf" class="productPdfLink" download style="display:none;"></a>');
                    let link = $('.productPdfLink');
                    link[0].click();
                    link.remove();
                    $('#vinni_response').html(response);
                },
            });
        }
    );
}

generateProductPdf();