<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Styles -->
    {{--<link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">

    @yield('styles')
</head>
<body>
    @yield('content')


<!-- Scripts -->
<!-- jQuery library -->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <!-- Latest compiled JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    {{--<script src="../../../node_modules/jquery-validation/dist/jquery.validate.js"></script>--}}
{{--    <script src="{{ asset('../node_modules/jquery-validation/dist/jquery.validate.js') }}"></script>--}}

    @yield('scripts')
</body>
</html>
