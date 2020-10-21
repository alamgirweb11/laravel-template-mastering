<!DOCTYPE html>
<html lang="en">
<head>
    {{-- header --}}
  @include('frontend.includes.header')
</head>
<body>
<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="{{ asset('frontend/image/loader.gif') }}"  alt="#"/></div>
  {{-- navbar --}}
  @include('frontend.includes.navbar')
  {{-- main content --}}
  @yield('main-content')
 {{-- footer --}}
@include('frontend.includes.footer')
</body>
</html>
