<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
</head>

<body>

    <main class="d-flex flex-nowrap">

        <!-- SIDEBAR -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Livewire Playground</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        @class([
                            'nav-link',
                            'text-white',
                            'active' => Route::is('home')
                        ])
                        wire:navigate
                    >
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('counter') }}"
                        @class([
                            'nav-link',
                            'text-white',
                            'active' => Route::is('counter')
                        ])
                        wire:navigate
                    >
                        Counter
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('lazy-loading') }}"
                        @class([
                            'nav-link',
                            'text-white',
                            'active' => Route::is('lazy-loading')
                        ])
                        wire:navigate
                    >
                        Lazy Loading
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="p-4">
            {{ $slot }}
        </div>
    </main>

</body>

</html>
