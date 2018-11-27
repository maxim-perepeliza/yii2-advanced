$('select.brand-auto').on('change', function () {
    $('select.model-auto option').remove();
    $('select.model-auto').append('<option value="">-</option>');
    var brand_car = $(this).val();
    //var csrfToken = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
            url: '/site/get-models-car?brandcar='+brand_car,
            type: 'get',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: {
               // brand_car: brand_car,
               // _csrf: yii.getCsrfToken()
            },
            success: function(response) {
                if(response.models){
                    response.models.forEach(function(element) {
                        $('select.model-auto').append('<option value="'+element.name+'">'+element.name+'</option>');
                    });
                    
                    
                }
            },
            error: function(er){
                console.log('Error get models');
            }
        });
    
});

