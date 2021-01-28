<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INSPINIA | Dashboard</title>
    <link href="{{ asset('backend/vendors/bootstrap4/bootstrap4.min.css') }}" rel="stylesheet">
    <!-- FooTable: For product list page -->
    <link href="{{ asset('backend/vendors/footable/footable.core.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/bootstrap-toggle/bootstrap-toggle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    @stack('plugin_css')

    <link href="{{ asset('backend/vendors/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/style/style.css') }}" rel="stylesheet">

    <!-- My css -->
    <link href="{{ asset('backend/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
<div id="wrapper">
    @include('layouts.backend.elements.structures._navbar')
    <div id="page-wrapper" class="gray-bg">
        @include('layouts.backend.elements.structures._header_top')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('layouts.backend.elements.structures._footer')
    </div>
</div>
@include('layouts.backend.elements.includes._modal')
@include('layouts.backend.elements.structures._footer_js')
</body>
</html>
