@props(['title', 'css' => null])

<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head', ['title' => $title, 'css' => isset($css) ? $css : 'landing.css'])
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="{{ route('landing') }}">
                    <img src="{{ asset('img/icon/logo.png') }}" alt="" class="img-fluid">
                </a>
            </div>

            <nav class="navbar" id="navbar">
                <ul>
                    <x-nav-link link="{{ route('landing') }}" :is-active="true" text="Home" />
                    <x-nav-link link="{{ route('login') }}" text="Login" :is-btn="true"
                    class="btn btn-info py-2 px-4 rounded-pill ms-3" />
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <main>
        {{ $slot }}
    </main>


    <footer id="footer">
        <div class="container h-100">
            <div class="row d-flex align-items-center h-100">
                <div class="col-lg-6 text-lg-left text-center ps-0">
                    <div class="copyright">
                        &copy; {{ date('Y') }} <strong>Cek Paket</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://www.cekpaket.co.id">Cek Paket</a>
                    </div>
                </div>
                <div class="col-lg-6 pe-0">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="{{ route('landing') }}">Home</a>
                        <a href="{{ route('privacy') }}">Privacy Policy</a>
                        <a href="{{ route('tnc') }}">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="btn btn-to-top btn-info btn--fixed-br d-flex align-items-center justify-content-center px-2">
        <i class='bx bx-up-arrow-alt bx-md'></i>
    </a>

    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
