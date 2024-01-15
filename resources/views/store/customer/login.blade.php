@extends('store.component.base')
@section('head')
    <link href="{{ asset('store/css/store_login.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="post">
                @csrf
                <h1>Tạo tài khoản</h1>
{{--                @include('common.noti_message')--}}
                <input type="text" name="name" placeholder="Nhập tên người dùng" required/>
                <input type="email" name="email" placeholder="Nhập địa chỉ email" required/>
                <input type="password" name="password" placeholder="Nhập mật khẩu" required/>
                <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" required/>
                <button>Đăng kí</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('customer.login.handle') }}" method="post">
                @csrf
                <h1>Đăng nhập</h1>
{{--                @include('common.noti_message')--}}
                <input type="email" name="email" placeholder="Nhập địa chỉ email" required/>
                <input type="password" name="password" placeholder="Nhập mật khẩu" required/>
                <a href="">Forgot your password?</a>
                <button>Đăng nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
@endsection
