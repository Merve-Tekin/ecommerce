<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.head')
</head>

<body>
<div id="app">

    @include('backend.layouts.sidebar')

    @yield('content')

</div>
@include('backend.layouts.footer')
</body>

</html>


