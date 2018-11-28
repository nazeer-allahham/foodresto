<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Food Resto | Welcome</title>

    <!-- Animation library -->
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

    <script src="{{ asset('js/modernizr.min.js')}}"></script>
</head>
<body>
    @include('client.layouts.header')
    @yield('content')
    @include('client.layouts.footer')
    
    @include('client.modals.login')
    @include('client.modals.register')
    @include('client.modals.basket')
    @include('client.modals.order') 
    @include('client.modals.reservation')

    {{-- 
    <!-- loader -->
    <div id="site-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div> 
    --}}

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    
    <script src="{{ asset('js/detect.js')}}"></script>
    <script src="{{ asset('js/fastclick.js')}}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
    <script src="{{ asset('js/waves.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    
    <script src="{{ asset('js/jquery.app.js')}}"></script>
    <script src="{{ asset('js/jquery.core.js')}}"></script> 
    
    <script src="{{ asset('js/main.js')}}"></script> 
    
    <script src="{{ asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });

        $(document).ready(function() {

        });
        function setVisibility(element, state) {
            $(element).modal('show');
        }
    </script>
    @yield('script')
</body>
</html>