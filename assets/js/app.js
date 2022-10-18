 $(document).ready(function () {
    $('.addProduct').click(function () {
        let _this = $(this);
        let soluongElement = _this.closest('.product-price').find('.soluong');
        let soluongSP = soluongElement.text();
        soluongSP++;
        soluongElement.text(soluongSP);
    })

    $('.subProduct').click(function () {
        let _this = $(this);
        let soluongElement = _this.closest('.product-price').find('.soluong');
        let soluongSP = soluongElement.text();
        if (!isNaN(soluongSP)) {
            if (soluongSP <= 0) {
                soluongElement.prop('disabled', true);
            } else {
                soluongSP--
                soluongElement.prop('disabled', false);
            }
        }

        soluongElement.text(soluongSP);
    })

    $('.btn-add-cart').on('click', function () {
        let _this = $(this);
        let product = _this.closest('.product-card')
        addProductToCart(product);
    })

    $('#cart-btn').click(function () {
        showToCart();
        $('.btn-remove-sp').on('click', function () {
            let _this = $(this);
            let id = _this.data('id');
            removeProductInCart(id);
            showToCart();
        })
    })

    if (JSON.parse(localStorage.getItem('carts')) == null) {
        initCart();
    }
})



function addProductToCart(product)
{
    let cartCurrent = JSON.parse(localStorage.getItem('carts'));
    let productAdd = {
        'id': product.data('id'), 
        'name': product.find('.product-name').text(),
         price: product.find('.price').data('price'),
        soluong: parseInt(product.find('.soluong').text()),
        image: product.find('.product-img').attr('src')
    }
    let canPush = true;
    if (null != cartCurrent) {
        cartCurrent.forEach((item, index) => {
            if (productAdd.id == item.id) {
                item.soluong = parseInt(item.soluong) + productAdd.soluong;
                cartCurrent[index].soluong = item.soluong;
                canPush = false;
            }
        });
    }


    // [{'id': 1, 'name': 'product', price: 5000, soluong: 1, image: '/abc.jpg' }]
    if (canPush) {
        cartCurrent.push(productAdd);
    }

    localStorage.setItem('carts', JSON.stringify(cartCurrent))
}

function removeProductInCart(id)
{
    let cartCurrent = JSON.parse(localStorage.getItem('carts'));
    let cartRemoveProduct = cartCurrent.filter(function (item) {
        return id != item.id;
    });
    localStorage.setItem('carts', JSON.stringify(cartRemoveProduct));
}

function showToCart()
{
    let cartCurrent = JSON.parse(localStorage.getItem('carts'));
    let productCart = '';
    let totalPrice = 0;
    if (null != cartCurrent) {
        cartCurrent.forEach((item, index) => {
            totalPrice += item.price * item.soluong;
            productCart += `<div class="box">
                            <button class="fas fa-trash btn-remove-sp" data-id="${item?.id}"></button>
                            <img src="${item?.image}" alt="">
                            <div class="content">
                                <h3>${item?.name}</h3>
                                <span class="price">${item?.price}</span>
                                <span class="quantity">số lượng : ${item?.soluong}</span>
                            </div>
                        </div>`;
        });
    }
    
    $('.total').text(totalPrice);
    $('.shopping-cart').html(productCart);
}

function initCart()
{
    localStorage.setItem('carts', JSON.stringify([]));
}