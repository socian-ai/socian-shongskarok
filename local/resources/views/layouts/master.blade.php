<!DOCTYPE html>
<html lang="en">

<head>


<title>@yield('title')</title>
    @include('layouts.head')
    @yield('additionalheader')
</head>


<body>

@include('layouts.sidebar')

@yield('pagecontent')

@include('layouts.footer')

@yield('additionalfooter')

</body>

</html>