<!DOCTYPE html>
<html lang="en">
  <head>
      {{-- header  --}}
   @include('backend.includes.header')
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
     @include('backend.includes.navbar')
    <!-- Sidebar menu-->
  @include('backend.includes.sidebar')
  {{-- main content --}}
  @yield('main-content')
  {{-- footer section --}}
    @include('backend.includes.footer')
  </body>
</html>