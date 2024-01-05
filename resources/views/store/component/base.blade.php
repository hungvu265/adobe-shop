<!DOCTYPE html>
<html lang="vn">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <link rel="shortcut icon" href="{{ asset('store/images/favicon.png') }}" type="image/x-icon">

    <title>Adobe Shop</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('store/css/bootstrap.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('store/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('store/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('store.component.header')
    <!-- end header section -->

    <!-- slider section -->
{{--    @include('store.component.slider')--}}
    <!-- end slider section -->
</div>


<!-- content section -->
@yield('content')
<!-- end content section -->


<!-- saving section -->
{{--@include('store.component.save_section')--}}
<!-- end saving section -->


<!-- why section -->
{{--@include('store.component.why_section')--}}
<!-- end why section -->


<!-- gift section -->
{{--@include('store.component.gift_section')--}}
<!-- end gift section -->


<!-- contact section -->
{{--@include('store.component.contact_section')--}}
<!-- end contact section -->


<!-- client section -->
{{--@include('store.component.client_section')--}}
<!-- end client section -->


<!-- info section -->
@include('store.component.footer')
<!-- end info section -->


<script src="{{ asset('store/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('store/js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('store/js/custom.js') }}"></script>

</body>

</html>
