$('.btn-card').click(function () {
    var product_id = $(this).attr('id').replace('add-cart-', '');
    var quantity = 1;
    $.ajax({
        url: '/them-vao-gio-hang-api',
        method: 'post',
        data: {
            id: product_id,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (resp) {
            var new_count = resp.cartItem.count;
            var new_total_money = resp.cartItem.total_money;
            var new_items = resp.cartItem.items;
            var new_content = '';
            for (var i in new_items) {
                new_content += '<tr>';
                new_content += '<td class="product-image">';
                new_content += '<a href="/foody/chi-tiet-mon-an/?id=' + new_items[i].food.id + '">';
                new_content += '<img src="/images/food/' + new_items[i].food.avatar + '" alt="Product">';
                new_content += '</a>';
                new_content += '</td>';
                new_content += '<td>';
                new_content += '<div class="product-name">';
                new_content += '<a href="/foody/chi-tiet-mon-an/?id=' + new_items[i].food.id + '">';
                new_content += new_items[i].food.name;
                new_content += '</a>';
                new_content += '</div>';
                new_content += '<div>';
                new_content += new_items[i].quantity;
                new_content += ' x <span class="product-price">';
                new_content += new_items[i].food.dicountPriceString;
                new_content += '</span>';
                new_content += '</div>';
                new_content += '</td>';
                new_content += '<td class="action">';
                new_content += '<a class="remove" href="/foody/xoa-san-pham/?id=' + new_items[i].food.id + '">';
                new_content += '<i class="fa fa-trash-alt" aria-hidden="true"></i>';
                new_content += '</a>';
                new_content += '</td>';
                new_content += '</tr>';
            }
            new_content += '<tr class="total">';
            new_content += '<td>Tổng giá:</td>';
            new_content += '<td colspan="2" id="header-cart-total">{{\\App\\Cart::getCart()->getTotalMoneyString()}}</td>';
            new_content += '</tr>';
            new_content += '<tr>';
            new_content += '<td colspan="3">';
            new_content += '<div class="cart-button">';
            new_content += '<a class="btn btn-primary" href="/foody/xem-gio-hang" title="View Cart">Xem đơn hàng</a>';
            new_content += '<a class="btn btn-primary" href="/foody/nhap-thong-tin-don-hang" title="Checkout">Gửi đơn hàng</a>';
            new_content += '</div>';
            new_content += '</td>';
            new_content += '</tr>';
            if (new_count == undefined) {
                $('#cart-count').text(1);
            } else {
                $('#cart-count').text(new_count);
            }
            $('#header-cart-wrapitem').html(new_content);
            $('#header-cart-total').text(new_total_money);
            swal('Thao tác thành công!', 'Món đã được thêm vào giỏ hàng!', 'success');
        },
        error: function (error) {
            swal('Thao tác thất bại', JSON.parse(error.responseText).msg);
        }
    });
});