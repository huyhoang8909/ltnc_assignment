$('input:radio[name="ship"]').change(function(){
    var new_price = 0;
    if ($(this).is(':checked') && $(this).val() == '2') {//local
        new_price = parseInt($("#total-field div").text().replace('$', '')) + 15;
        $("#total-field div").text('$' + new_price);
    } else if ($(this).is(':checked') && $(this).val() == '1') {//free
        new_price = parseInt($("#total-field div").text().replace('$', '')) - 15;
        $("#total-field div").text('$' + new_price);
    }
});