<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tên sản phẩm</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" value="{{ isset($id) ? $product->name : '' }}"
                           placeholder="Nhập tên sản phẩm" name="name" required/>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Hiển thị sản phẩm</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="switch form-label">
                            @if(isset($id))
                                <input class="form-control" type="checkbox" name="status" {{ $product->status == 1 ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            @else
                                <input class="form-control" type="checkbox" name="status" checked>
                                <span class="slider round"></span>
                            @endif
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Loại sản phẩm</h5>
                </div>
                <div class="card-body">
                    <select class="form-select mb-3" name="type" required>
                        <option {{ isset($id) ? '' : 'selected' }}>Chọn loại sản phẩm</option>
                        @foreach($type as $row)
                            <option value="{{$row->id}}" {{ isset($id) && $product->type_id == $row->id ? 'selected' : '' }}>
                                {{ $row->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Mô tả sản phẩm</h5>
                </div>
                <div class="card-body">
                    <textarea class="form-control" id="summernote" name="description">
                        {!! isset($id) ? $product->description : null !!}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
    @if(!isset($id))
        <div class="row">
            <div class="col-12 mb-3" id="listItem">
                <div class="row mb-3">
                    <div class="col-2">
                        <label for="type">Chọn gói sản phẩm</label>
                        <select name="" required >
                            <option selected value="">Chọn loại sản phẩm</option>
                                <option value=""></option>
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="amount">Số lượng</label>
                        <br>
                        <input type="number" name="amount" style="width: 100px" required />
                    </div>
                    <div class="col-2">
                        <label for="price">Đơn giá</label>
                        <br>
                        <input type="number" name="price" style="width: 100px" required />
                    </div>
                    <div class="col-3 group-img">
                        <label for="img">Chọn hình ảnh</label>
                        <input name="image" type="file" style="width: 85px" onchange="previewFile()" />
                        <img src="#" style="width: 200px" id="img">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="btn btn-primary" id="addGroupImg" style="width: 100px">Thêm</div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-12 mb-3" id="listItem">
                <div class="row mb-3">
                    <div class="col-2">
                        <label for="type">Chọn gói sản phẩm</label>
{{--                        @dd($type)--}}
                        <select name="type">
                            <option value="">Chọn loại sản phẩm</option>
                            @foreach($type as $row)
                                <option value="{{$row->id}}" {{ $product->type_id == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="amount">Số lượng</label>
                        <br>
                        <input type="number" name="amount" style="width: 100px"
                               value="{{ $product->productType->amount }}">
                    </div>
                    <div class="col-2">
                        <label for="price">Đơn giá</label>
                        <br>
                        <input type="number" name="price" style="width: 100px"
                               value="{{ $product->productType->price }}">
                    </div>
                    <div class="col-3 group-img">
                        <label for="img">Chọn hình ảnh</label>
                        <input name="image" type="file" style="width: 85px" onchange="previewFile()" />
                        <img src="{{ isset($id) ? asset('images/'. $product->component->first()->image) : '#' }}"
                             style="width: 200px" id="img">
                    </div>
                </div>
            </div>
            @if(!isset($id))
                <div class="col-12">
                    <div class="btn btn-primary" id="addGroupImg" style="width: 100px">Thêm</div>
                </div>
            @endif
        </div>
    @endif
</div>
