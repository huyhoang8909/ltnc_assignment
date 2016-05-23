function add(item_id)
{

    var quantity_id = "#" + item_id;
    var price_id = ".price-" + item_id;

    var new_price = parseInt($(price_id + " input").val()) * (parseInt($(quantity_id).val()) + 1);
    $(price_id + " span").text('$' + new_price);
    updateCartPrice($(price_id + " input").val());

    $.ajax({
      method: "GET",
      url: "cart/increase/" + item_id,
    })
    .success(function( msg ) {
        
    })
    .done(function( msg ) {
        console.log( "Data Saved: " + msg );
    });
    // return false;
}

function reduce(item_id)
{
    var quantity_id = "#" + item_id;
    var price_id = ".price-" + item_id;

    if ($(quantity_id).val() <= 0) return false;
    var new_price = parseInt($(price_id + " input").val()) * (parseInt($(quantity_id).val()) - 1);
    $(price_id + " span").text('$' + new_price);
    updateCartPrice($(price_id + " input").val() * -1);

    $.ajax({
      method: "GET",
      url: "cart/reduce/" + item_id,
    })
    .success(function( msg ) {
        
    })
    .done(function( msg ) {
        console.log( "Data Saved: " + msg );
    });

}

function updateCartPrice(price)
{
    var new_price = parseInt($("#cart-price").text().replace('$', '')) + parseInt(price);
    $("#cart-price").text('$' + new_price);
    updateTotalPrice(price);
}

function updateTotalPrice(price)
{
    var new_price = parseInt($("#total-price div").text().replace('$', '')) + parseInt(price);
    $("#total-price div").text('$' + new_price);
}

function applyCoupon()
{
    $.ajax({
      method: "GET",
      url: "cart/coupon/" + $('#cupon-widget input').val(),
      dataType: 'json'
    })
    .success(function(coupon) {
        if ($.isEmptyObject(coupon) == false)
        {
            var price = parseInt($("#cart-price").text().replace('$', ''));
            var off = 0;

            if (coupon.TYPE == 'coupon') {
                off = parseInt(coupon.DISCOUNT / 100) * price
            } else {
                off = parseInt(coupon.DISCOUNT);
            }

            updateTotalPrice(off * -1);
        } else {
            alert("Your coupon is invalid!");
        }
    })
    .fail(function( msg ) {
        alert("There is a error!");
    });

}