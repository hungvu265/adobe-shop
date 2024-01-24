@extends('admin.index')
@section('content')
    @include('admin.common.notice')
    <form action="{{ route(ADMIN_PRODUCT_UPDATE, $id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @if(isset($id))
            <input type="hidden" value="{{ $id }}" name="id">
        @endif
        <div class="row mb-3">
            <div class="col-lg-6">
                <div>
                    <h1 class="h3 d-inline align-middle">Thay đổi</h1>
                    <a class="badge bg-dark text-white ms-2">
                        Thay đổi thông tin sản phẩm
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <button class="btn btn-success" type="submit">Lưu</button>
                <a href="{{ route(ADMIN_PRODUCT_INDEX) }}" class="btn btn-primary ml-3">Quay lại</a>
            </div>
        </div>
        @include('admin.product.form')
    </form>
@endsection
@section('script')
    <script>
        function previewFile() {
            const preview = document.getElementById("img");
            const file = document.querySelector("input[type=file]").files[0];
            const reader = new FileReader();

            reader.addEventListener(
                "load",
                () => {
                    console.log(reader)
                    preview.src = reader.result;
                },
                false,
            );

            if (file) {
                reader.readAsDataURL(file);
            }
        }

    </script>
@endsection
