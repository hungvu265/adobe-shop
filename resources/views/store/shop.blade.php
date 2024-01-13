@extends('store.component.base')
@section('content')
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="">
                                <div>
                                    <img style="width: 244px"
                                         src="https://i0.wp.com/accbanquyen.com/wp-content/uploads/2022/01/287625262_1492012301216929_5765182231600040378_n.jpg?w=490&ssl=1%20490w,%20https://i0.wp.com/accbanquyen.com/wp-content/uploads/2022/01/287625262_1492012301216929_5765182231600040378_n.jpg?resize=100%2C100&ssl=1%20100w,%20https://i0.wp.com/accbanquyen.com/wp-content/uploads/2022/01/287625262_1492012301216929_5765182231600040378_n.jpg?resize=64%2C64&ssl=1%2064w"
                                         alt="">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h6 style="text-align: center">{{ $product->name }}</h6>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <h6 class="text-danger text-center">$200</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4" style="display: flex; justify-content: center">
                    {{ $products->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
@endsection
