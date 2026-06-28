<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NISU LMS</title>

    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <div class="wrapper">

        @include('components.partials.navbar')

        @include('components.partials.sidebar')

        <div class="content-wrapper">
            <section class="content p-3">
                <div class="container-fluid">
                    
                    {{ $slot }} 

                </div>
            </section>
        </div>

        @include('components.partials.footer')

    </div>

    <script src="{{ asset('template/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('template/adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
</body>
</html>