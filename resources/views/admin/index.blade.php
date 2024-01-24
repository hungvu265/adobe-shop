<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-up-r.css' rel='stylesheet'>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/admin/img/svg/logo.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/admin/css1/admin_login.css')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/admin/css1/admin.css')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/admin/css1/app.css')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/admin/css1/css.css')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/admin/css1/rating.css')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/admin/css1/store_login.css')}}" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('/admin/css/style.min.css')}}">
</head>

<body>
<div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    @include('admin.sidebar')
    <div class="main-wrapper">
        <!-- ! Main nav -->
        @include('admin.navbar')
        <!-- ! Main -->
        <main class="content">
            @yield('content')
        </main>
        <!-- ! Footer -->
        @include('admin.footer')
    </div>
</div>
<!-- Chart library -->
<script src="{{asset('/admin/plugins/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{asset('/admin/plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('/admin/js1/admin.js')}}"></script>
<script src="{{asset('/admin/js/script.js')}}"></script>
<script src="{{asset('/admin/js1/app.js')}}"></script>
<script src="{{asset('/admin/js1/cart.js')}}"></script>
<script src="{{asset('/admin/js1/dashboard.js')}}"></script>
<script src="{{asset('/admin/js1/js.js')}}"></script>
<script src="{{asset('/admin/js1/store.js')}}"></script>
</body>

</html>
