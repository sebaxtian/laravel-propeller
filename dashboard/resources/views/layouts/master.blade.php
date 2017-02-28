<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- PROPELLER STYLES -->
    <!-- Google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Propeller css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pmd/assets/css/propeller.min.css') }}">
    <!-- Propeller theme css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('pmd/themes/css/propeller-theme.css') }}">
    <!-- Propeller admin theme css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('pmd/themes/css/propeller-admin.css') }}">

    @yield('include-styles')

    <!-- /#PROPELLER STYLES -->


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <div id="app">
    </div>


    @if(Route::getCurrentRoute()->uri() != '404' && Route::getCurrentRoute()->uri() != 'login-page')
        <!-- PROPELLER HEADER -->
        @include('layouts.header')
        <!-- /#PROPELLER HEADER -->

        <!-- PROPELLER SIDEBAR -->
        @include('layouts.sidebar')
        <!-- /#PROPELLER SIDEBAR -->
    @endif

    <!-- PROPELLER CONTENT -->
    @yield('content')
    <!-- /#PROPELLER CONTENT -->

    @if(Route::getCurrentRoute()->uri() != '404' && Route::getCurrentRoute()->uri() != 'login-page')
        <!-- PROPELLER FOOTER -->
        @include('layouts.footer')
        <!-- /#PROPELLER FOOTER -->
    @endif


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- PROPELLER SCRIPTS -->
    <script src="{{ asset('pmd/assets/js/propeller.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var sPath=window.location.pathname;
            var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
            $(".pmd-sidebar-nav").each(function(){
                $(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
                $(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
                $(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
                $(this).find("a[href='"+sPage+"']").addClass("active");
            });
        });
    </script>

    @yield('include-scripts')

    <!-- /#PROPELLER SCRIPTS -->

</body>
</html>
