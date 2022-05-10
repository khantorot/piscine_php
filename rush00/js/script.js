let cart = {};

$('document').ready(function(){
	loadGoods();
	checkCart();
	showMiniCart();
});

function loadGoods()
{
	$.getJSON('goods.json', function(data){
		let out = '';

		for (let key in data)
		{
			out += '<div class="single_good">';
			out += '<h4>' +data[key]['name'] + '<h/4>';
			out += '<p>' +data[key]['cost'] + '</p>';
			out += '<img src="'+data[key].image+'">';
			out += '<button class="add_to_card" data-art="'+key+'">buy</button>';
			out += '</div>';
		}

		$('#goods').html(out);
		$('button.add_to_card').on('click', addToCart);
	})
}

function addToCart()
{
	let articul = $(this).attr('data-art');

	if (cart[articul] != undefined)
		cart[articul]++;
	else
		cart[articul] = 1

	localStorage.setItem('cart', JSON.stringify(cart));	
	showMiniCart();
}

function checkCart()
{
	if (localStorage.getItem('cart') != null)
	{
		cart = JSON.parse(localStorage.getItem('cart'));
	}
}

function showMiniCart()
{
	let out = '';
	for(let i in cart)
	{
		out += i + '----' + cart[i] + '<br>';
	}
	$('#mini_cart').html(out);
}