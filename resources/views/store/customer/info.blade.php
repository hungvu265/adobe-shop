@extends('store.component.base')
@section('content')
<section class="contact_section py-5">
    <div class="container px-0">
        <div class="heading_container ">
            <h2 class="">
                Information
            </h2>
        </div>
    </div>
    <div class="container container-bg">
        <form action="#" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-8 px-0">
                    <div class="form-group">
                        <label>Name:</label>
                        <input class="form-control" type="text" value="{{ $customer->name ?? '' }}"/>
                    </div>
                    <div>
                        <label>Email:</label>
                        <input class="form-control" type="email" value="{{ $customer->email ?? ''}}"/>
                    </div>
                    <div>
                        <label></label>
                        <input class="form-control" type="text" value="{{ $customer->phone ?? ''}}"/>
                    </div>
                    <div class="d-flex ">
                        <button>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
