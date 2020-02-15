<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
</head>

<body>
    @include('website.partials.header')

    @yield('content')

    @include('website.partials.footer')
    @include('website.partials.script')
</body>
</html>