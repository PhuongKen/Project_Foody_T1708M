@extends('layout.master',['page_title'=>'Giỏ hàng'])
@section('content')
    <div class="container container-edit">
        <div class="page-cart" style="margin-top: 30px">
            <div class="table-responsive">
                <table class="cart-summary table table-bordered">
                    <thead>
                    <tr>
                        <th class="width-20">&nbsp;</th>
                        <th class="width-80 text-center">Image</th>
                        <th>Name</th>
                        <th class="width-100 text-center">Unit price</th>
                        <th class="width-100 text-center">Qty</th>
                        <th class="width-100 text-center">Total</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td class="product-remove">
                            <a title="Remove this item" class="remove" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                        <td>
                            <a href="product-detail-left-sidebar.html">
                                <img width="80" alt="Product Image" class="img-responsive" src="/images/foody/9.jpg">
                            </a>
                        </td>
                        <td>
                            <a href="product-detail-left-sidebar.html" class="product-name">Organic Strawberry Fruits</a>
                        </td>
                        <td class="text-center">
                            265 đ
                        </td>
                        <td>
                            <div class="product-quantity">
                                <div class="qty">
                                    <div class="input-group">
                                        <input type="text" name="qty" id="qtyvalue" value="1" data-min="1">
                                        <span class="adjust-qty">
															<span class="adjust-btn plus btn-plus">+</span>
															<span class="adjust-btn minus btn-minus">-</span>
														</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center ">
                            265 đ
                        </td>
                    </tr>
                    <tr>
                        <td class="product-remove">
                            <a title="Remove this item" class="remove" href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                        <td>
                            <a href="product-detail-left-sidebar.html">
                                <img width="80" alt="Product Image" class="img-responsive" src="/images/foody/31.jpg">
                            </a>
                        </td>
                        <td>
                            <a href="product-detail-left-sidebar.html" class="product-name">Organic Strawberry Fruits</a>
                        </td>
                        <td class="text-center">
                            $150
                        </td>
                        <td>
                            <div class="product-quantity">
                                <div class="qty">
                                    <div class="input-group">
                                        <input type="text" name="qty" value="2" data-min="1">
                                        <span class="adjust-qty">
															<span class="adjust-btn plus">+</span>
															<span class="adjust-btn minus">-</span>
														</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            $300
                        </td>
                    </tr>
                    </tbody>

                    <tfoot>
                    <tr class="cart-total">
                        <td rowspan="3" colspan="3"></td>
                        <td colspan="2" class="text-right">Total products</td>
                        <td colspan="1" class="text-center">$565</td>
                    </tr>
                    <tr class="cart-total">
                        <td colspan="2" class="text-right">Total shipping</td>
                        <td colspan="1" class="text-center">$10</td>
                    </tr>
                    <tr class="cart-total">
                        <td colspan="2" class="total text-right">Total</td>
                        <td colspan="1" class="total text-center">$575</td>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="checkout-btn">
                <a href="product-checkout.html" class="btn btn-primary pull-right" title="Proceed to checkout">
                    <span>Proceed to checkout</span>
                    <i class="fa fa-angle-right ml-xs"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var count = 1;
        // var qty = $('#qtyvalue').val();
        var countTotal = $('#qtyvalue');

        $('.btn-plus').click(function () {
            count++;
            countTotal.val(count);
        });

        $('.btn-minus').click(function () {
            if (count > 1) {
                count--;
                countTotal.val(count);
            }
        });
    </script>
@endsection