<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administrator | Maslah Executives</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/dashboard.css','resources/css/property.css'])
</head>
<body>
<div class="Navbar">
    <div class="Navbar__Link Navbar__Link-toggle">
        <i class="fas fa-sign-out-alt"></i>
    </div>

    <nav class="Navbar__Items Navbar__Items--right">
        <div class="Navbar__Link">
            <li class="dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </div>

    </nav>
</div>

<div class="s-layout">


    <!-- Sidebar -->
    <div class="s-layout__sidebar">
        <a class="s-sidebar__trigger" href="#0">
            <i class="fas fa-bars"></i>
        </a>

        <nav class="s-sidebar__nav">
            <ul>
                <li>
                    <a class="s-sidebar__nav-link" href="/home">
                        <i class="fa fa-home"></i><em>Home</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link" href={{ route('property.new') }}>
                        <i class="fas fa-upload"></i><em>Upload Product</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link" href={{ route('properties.all') }}>
                        <i class="fas fa-list"></i><em>View Uploads</em>
                    </a>
                </li>
                <li>
                    <a class="s-sidebar__nav-link" href={{ route('properties.all') }}>
                        <i class="fas fa-bell"></i><em>Notifications</em>
                    </a>
                </li>
                <li>
                        <a class="s-sidebar__nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i><em>Log Out</em>                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                </li>

                    </ul>
        </nav>
    </div>

    <!-- Content -->
    <main class="s-layout__content">
        @yield('content')
    </main>
</div>

<script>
    function classToggle() {
        const navs = document.querySelectorAll('.Navbar__Items')

        navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
    }

    document.querySelector('.Navbar__Link-toggle')
        .addEventListener('click', classToggle);
</script>
</body>
</html>
