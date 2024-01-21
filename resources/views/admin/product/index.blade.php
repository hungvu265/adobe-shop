@extends('admin.index')
@section('content')
    <div class="row mb-3">
        <div class="col-lg-6">
            <div>
                <h1 class="h3 d-inline align-middle">Danh sách</h1>
                <a class="badge bg-dark text-white ms-2">
                    Danh sách sản phẩm
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <a class="btn btn-success" href="">Thêm mới</a>
            <a class="btn btn-primary ml-3" href="">Quay lại</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover table-striped" id="users-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th style="width: 200px">Sản phẩm đặc biệt</th>
                    <th>Trạng thái</th>
                    <th>Màu sắc</th>
                    <th>Dung lượng</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th colspan="2">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                                <td ></td>
                                <td></td>
                                <td>
                                        <div class="btn btn-info mt-1"></div>
                                </td>
                                <td>
                                        <p class="text-bg-success text-center">Hiển thị</p>
                                        <p class="text-bg-danger text-center">Ẩn</p>
                                </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-primary">Thay đổi</a>
                                <a href=""
                                   onclick="return confirm('Bạn có chắc chắn muốn xoá không?');"
                                   class="btn btn-danger">Xoá</a>
                            </td>

                                <td >
                                    <a href="" class="btn btn-success">
                                        Thêm
                                    </a>
                                </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div style="float: right">
            </div>
        </div>
    </div>
@endsection
