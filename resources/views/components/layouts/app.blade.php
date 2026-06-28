<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NISU LMS</title>

    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini text-sm">
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
</body>
</html>