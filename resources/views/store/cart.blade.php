@extends('store.component.base')
@section('content')
    <!-- Content -->
    <div class="container mt-5">
        <form action="#" method="post">
            @csrf
            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name">Sản phẩm</th>
                    <th class="product-price">Giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="product-subtotal">Tổng</th>
                </tr>
                </thead>
                <tbody>

                <tr class="woocommerce-cart-form__cart-item cart_item">

                    <td class="product-remove">
                        <a href="" class="remove" aria-label="Delete">×</a>
                    </td>

                    <td class="product-thumbnail">
                        <a href="">
                            <img width="490" height="490"
                                 src="https://i0.wp.com/accbanquyen.vn/wp-content/uploads/2022/01/287625262_1492012301216929_5765182231600040378_n.jpg?resize=490%2C490&amp;ssl=1"
                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                 loading="lazy">
                        </a>
                    </td>

                    <td class="product-name" data-title="Sản phẩm">
                        <a href="https://accbanquyen.vn/sp/adobe-full-app-ban-quyen/?attribute_chon-goi=G%C3%B3i+690k+100GB&amp;attribute_co-xuat-hoa-don-vat=Kh%C3%B4ng+VAT+%28KH+C%C3%A1+nh%C3%A2n%29">
                            Tài Khoản Adobe Full Apps Chính Chủ (690k/1 năm) - Có Xuất VAT
                        </a>
                        <div>
                            <strong>Chọn gói:</strong> Gói 690k 100GB
                        </div>
                    </td>

                    <td class="product-price" data-title="Giá">
                        <span class="woocommerce-Price-amount amount">
                            <bdi>
                                <span class="woocommerce-Price-currencySymbol">VND</span>690.000
                            </bdi>
                        </span>
                    </td>

                    <td class="product-quantity" data-title="Số lượng">
                        <div class="quantity">
                            <button type="button" class="minus">-</button>

                            <input type="number" id="quantity" class="input-text qty text" step="1"
                                   min="0" max="" name="cart[4e89a5752df8e92228e8673e8787f95c][qty]" value="2"
                                   title="SL" size="4" pattern="[0-9]*" inputmode="numeric"
                                   aria-labelledby="Tài Khoản Adobe Full Apps Chính Chủ (690k/1 năm) - Có Xuất VAT số lượng">
                            <button type="button" class="plus">+</button>
                        </div>
                    </td>

                    <td class="product-subtotal" data-title="Tổng">
                        <span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">VND</span>1.380.000</bdi></span></td>
                </tr>
                </tbody>
            </table>

            {{-- Bill info --}}
            <div class="cart-collaterals">
                <div class="cart_totals ">
                    <h2>Đơn giá</h2>

                    <table class="shop_table shop_table_responsive" style="border: 0 solid">
                        <tbody>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Tổng" style="text-align: right">
                                <strong>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">VND</span>
                                        1.380.000
                                </span>
                                </strong>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout">
                        <a href="{{ route('store.payment') }}" class="checkout-button button alt wc-forward">
                            Tiến hành thanh toán</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(".minus").click(function (event) {
                const value = Number($(event.target).siblings()[0].value)
                if (value >= 1) {
                    $(event.target).siblings()[0].value--
                }
            });

            $(".plus").click(function (event) {
                $(event.target).siblings()[1].value++
            });
        });
    </script>
@endsection
