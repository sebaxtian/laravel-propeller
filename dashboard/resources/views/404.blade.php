@extends('layouts.master')

@section('include-styles')
@endsection

@section('content')
<!--content area start-->
<div class="errorpage">
    <div class="wrapper">
        <div class="container">
            <header class="header-primary">
                <a href="{{ route('home') }}" rel="home"><img src="{{ asset('pmd/themes/images/logo-icon.png') }}" alt="logo" class="logo"></a>
            </header><!-- header-primary -->
        
            <div class="content-primary">
                <h1 class="title">Page Not Found</h1>
                <p class="description">The page you are looking for was moved, removed, <br>
                renamed or might never existed.</p>
                <div class="section-footer">
                    <a href="{{ route('home') }}" class="btn btn-primary">Back To Homepage</a>
                    <a href="mailto:name@mail.com" class="btn btn-secondary">Report Error</a>
                </div>
            </div><!-- content-primary -->
        </div><!-- container -->
    </div>
</div>
<!--end content area-->
@endsection

@section('include-scripts')
<script>
    $( "body" ).addClass( "body-custom body-404page" );
</script>
@endsection
