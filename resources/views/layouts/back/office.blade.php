<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Impaxis') }} | @yield('title')</title>
    
    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/logo/favicon-impaxis-securities.ico') }}">
    
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    

    <link href="{{ asset('/back/assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('/back/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/back/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet') }}" />
    <link rel="stylesheet" href="{{ asset('/back/assets/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/back/assets/css/admin.css') }}" />


    @stack('style')
    {{-- <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> --}}
    
</head>
<body class="admin-body">
    <div class="admin-shell">

        @include('layouts.back.partials._sidebar')

        <div class="admin-main">

            @include('layouts.back.partials._topbar')
            
            <main class="admin-content">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('/back/assets/libs/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/back/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/back/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script>
        document.getElementById('sidebarToggle')?.addEventListener('click', () => {
            document.body.classList.toggle('sidebar-open');
        });
    </script>
</body>

</html>