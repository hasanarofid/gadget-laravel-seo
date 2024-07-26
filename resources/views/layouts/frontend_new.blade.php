<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.new.meta')
    <title>@yield('title')</title>
    @stack('before-style')
    @include('includes.new.style')
    @stack('after-style')
</head>
<body>
  <div id="cont">
    @include('includes.new.header2')
  </div>
    @yield('content')
    @include('includes.new.footer')
  

    @stack('before-script')
    @include('includes.new.script')
    @stack('after-script')
</body>
</html>