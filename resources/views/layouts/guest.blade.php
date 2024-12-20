<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link class="favicon" rel="icon" type="image/x-icon" href="{{asset('assets/img/Logo-alone-inverted.png')}}">
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>
    {{$slot}}
    @yield('scripts')
</body>
</html>
