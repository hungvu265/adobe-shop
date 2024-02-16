@extends('store.component.base')
@section('content')
    <!-- Content -->
    <div class="container mt-3">
        <div class="row mt-3" id="sanpham">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
{{--                                @foreach($product->component as $key => $item)--}}
{{--                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class="active"' : '' }}></li>--}}
{{--                                @endforeach--}}
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://accbanquyen.vn/wp-content/uploads/2022/01/287625262_1492012301216929_5765182231600040378_n.jpg" class="d-block w-100"
                                         alt="anh">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://accbanquyen.vn/wp-content/uploads/2022/01/6.png" class="d-block w-100"
                                         alt="anh">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div>
                            <form action="" method="get">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <ul style="list-style: none;">
                                    <li><h3>{{ $product->name }}</h3></li>
                                    <li>
{{--                                        <h3>{{ number_format($component->first()->price) }} VND</h3>--}}
                                    </li>
                                    <hr>
                                    <li>
                                        <p>IPhone là một điện thoại thông minh được sản xuất bởi Apple kết hợp máy tính, iPod, máy ảnh kỹ thuật số và điện thoại di động thành một thiết bị có giao diện màn hình cảm ứng. IPhone chạy hệ điều hành iOS và vào năm 2021 khi iPhone 13 được giới thiệu, nó đã cung cấp tới 1 TB dung lượng lưu trữ và camera 12 megapixel.</p>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="product-option">
                                            <strong class="label">Lựa chọn phiên bản</strong>
                                            <div class="options" id="versionProduct" data-id="4" style="display: flex">
                                                <input type="hidden" name="component" value="">
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li class="mau-sanpham">
                                        <div style="width: 30%; margin-bottom: 10px">
                                            <h2>Option</h2>
                                            <select id="package" name="package" data-attribute_name="package"
                                                    data-show_option_none="yes">
                                                <option value="">Chọn một tùy chọn</option>
                                                <option value="Gói 690k 100GB" class="attached enabled">Gói 690k 100GB
                                                </option>
                                                <option value="Gói 1090k 100GB" class="attached enabled">Gói 1090k
                                                    100GB
                                                </option>
                                                <option value="Gói 1490k 80GB" class="attached enabled">Gói 1490k 80GB
                                                </option>
                                                <option value="Gói 1990k 80GB" class="attached enabled">Gói 1990k 80GB
                                                </option>
                                            </select>
                                        </div>
                                        <div style="width: 250px;">
                                            <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">

                                                <div class="quantity">
                                                    <button type="button" class="minus">-</button>

                                                    <input type="number" id="quantity" class="input-text qty text" step="1" min="1" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" lang="en">
                                                    <button type="button" class="plus">+</button>
                                                </div>

                                                <button type="submit" class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">Thêm vào giỏ hàng</button>
                                            </div>
                                        </div>
                                    </li>
{{--                                    <li class="add" id="add-cart" style="background-color: black;color: white">--}}
{{--                                        THÊM VÀO GIỎ HÀNG--}}
{{--                                    </li>--}}
{{--                                    <li class="add" style="background-color: #f15e2c;">--}}
{{--                                        <a style="display: block" href="{{ route(STORE_CART) }}">THANH TOÁN</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row" style="display: flex;justify-content: center">
        <div class="col-12 text-center">
            <h1>Giới thiệu sản phẩm</h1>
        </div>
        <div class="col-10">
            <div>
                {!! $product->description !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(".minus").click(function (event) {
                const value = Number(document.getElementById('quantity').value)
                if (value >= 1) {
                    document.getElementById('quantity').value--
                }

                if (value === 1) {
                    const element = $('.single_add_to_cart_button')
                    element.attr('disabled', true)
                    element.css('opacity', '0.5')
                }
            });

            $(".plus").click(function (event) {
                const element = $('.single_add_to_cart_button')
                element.attr('disabled', false)
                element.css('opacity', '1')
                document.getElementById('quantity').value++
            });
        })
    </script>
@endsection
