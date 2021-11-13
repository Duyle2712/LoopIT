@php
    $route_name = Route::currentRouteName();
@endphp

@if ($route_name == 'Home')
    @include('layout.jobseeker.header_home')
@elseif ($route_name == 'js')
    @include('layout.jobseeker.header')
@endif

@yield('content')
@include('layout.jobseeker.footer')


