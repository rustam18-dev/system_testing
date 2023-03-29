<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <link rel="stylesheet" href="{{asset('/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}"/>
</head>
<body>
<div class="container-scroller">
    @include('layout.header')
    <div class="container-fluid page-body-wrapper">
        @include('layout.sidebar')
        <div class="main-panel">

            @yield('content')

        </div>
    </div>
    @include('layout.footer')
</div>
</body>
</html>


