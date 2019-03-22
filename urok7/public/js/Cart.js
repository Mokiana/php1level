function addToCart(itemId) {
    console.log("js - addTOCart()");
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/addToCart/" + itemId + '/',
        dataType: 'json',
        sussess: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });
};

function removefromcartAction(itemId) {
    console.log("js - renoveFromCart(" + itemId + ")");
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        sussess: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });
}
