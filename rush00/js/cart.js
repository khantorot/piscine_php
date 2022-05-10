let cart = {};


$.getJSON('goods.json', function (data) {
    let goods = data;
    checkCart();
    showCart();

    function showCart() {
        let out = '';
        for (let key in cart)
        {
            out += '<div class="single_good">';
            out += '<button class="delete_goods" data-art="'+key+'" >x</button>';
            out += '<img src="'+goods[key].image+'">';
            out += goods[key].name;
            out += '<button class="minus_goods" data-art="'+key+'">-</button>';
            out += cart[key];
            out += '<button class="plus_goods" data-art="'+key+'">+</button>';
            out += cart[key] * goods[key].cost;
            out += '</div>';
        }
        $('#my_cart').html(out);
        $('.plus_goods').on('click', plusGoods);
        $('.minus_goods').on('click', minusGoods);
        $('.delete_goods').on('click', deleteGoods);
    }

    function plusGoods()
    {
        let articul = $(this).attr('data-art');
        cart[articul]++;
        saveCart();
        showCart();
    }

    function minusGoods()
    {
        let articul = $(this).attr('data-art');
        if (cart[articul]>1)
            cart[articul]--;
        else
            delete cart[articul];
        saveCart();
        showCart();
    }

    function deleteGoods()
    {
        let articul = $(this).attr('data-art');
        delete cart[articul];
        saveCart();
        showCart();
    }


});

function checkCart()
{
    if (localStorage.getItem('cart') != null)
        cart = JSON.parse(localStorage.getItem('cart'));
}

function saveCart(){
    localStorage.setItem('cart', JSON.stringify(cart) );
}