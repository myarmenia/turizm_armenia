$('.check-route').on('click', function(){
    let routeName = $(this).html()
    let routeId = $(this).attr('data-id')

    $('#checkedRoute').html(routeName)

    $('#selectRoute').val(routeId);
    $('#selectRoute').trigger('change');
})


$('#viewQuantity').on('input', function(){
    $('input[name="quantity"]').val($(this).val())
})
