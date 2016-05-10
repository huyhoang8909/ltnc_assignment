function add(item_id)
{

    $("#" + item_id).value = $("#" + item_id).value + 1;
    $(".price-" + item_id).text = '$' + $(".price-" + item_id + " input").val() * $("#" + item_id).value ;
    console.log($(".price-" + item_id + " input").val() * $("#" + item_id).val());
    // $.ajax({
    //   method: "GET",
    //   url: "cart/add/" + $item_id,
    // })
    // .success(function( msg ) {
    //     $("#" + $item_id).value = $("#" + $item_id).value + 1;
    // })
    // .done(function( msg ) {
    //     console.log( "Data Saved: " + msg );
    // });
    // return false;
}

function reduce($item_id)
{
    $("#" + $item_id).value = $("#" + $item_id).value - 1;
    console.log($item_id);
}