<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- ============== from template ========================= --}}
    {{-- <link rel="icon" type="image/png" href="{{ asset('assets/img//favicon.png"> --}}

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/paper-kit.min.css?v=2.3.1') }}" rel="stylesheet" />

    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>

    <script src="{{ asset('assets/js-dev/head-script.js')}}"></script>
</head>

<body class="presentation-page sidebar-collapse">
    <nav class="navbar navbar-expand-lg fixed-top nav-down navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ route('welcome', app()->getLocale())}}" rel="tooltip" title="Paper Kit 2 PRO" data-placement="bottom" >
                    <img src="{{asset('assets/img/logo.png')}}">
                </a>
            </div>

            <div class="collapse navbar-collapse" data-nav-image="./assets/img/blurred-image-1.jpg" data-color="orange">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">

                        <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                            {{config('app.available_locales')[app()->getLocale()]}}
                        </a>
                        {{-- {{dd(request()->route()->getName())}} --}}
                        <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink1">
                             @foreach(config('app.available_locales') as $locale => $language)
                                @if ($locale != app()->getLocale())
                                        <a class="dropdown-item" href="{{ url($locale)}}">
                                            <strong class="px-3">{{strtoupper($locale)}}</strong>
                                            {{ $language }}
                                        </a>
                                @endif

                            @endforeach

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main >
        @yield('content')
    </main>

    <footer class="footer footer-black section-gray ">
        <div class="container pt-5">
            <div class="row">
                <div class="w-100">
                    <div class="m-auto text-center footer-info">
                        <a class="navbar-brand m-auto" href="{{ route('welcome', app()->getLocale())}}" rel="tooltip" title="Paper Kit 2 PRO" data-placement="bottom" >
                            <img src="{{asset('assets/img/logo.png')}}">
                        </a>
                        <p class="mt-1">Contact informatioin</p>
                        <a href="tel:37493688544">Tel: +37493 688-544</a>
                        <p>E-mail: tourism@yerevan.am</p>
                    </div>
                    <div class="d-flex justify-content-center mt-2 gup-2">
                        <div class="mr-3"><a href="https://www.facebook.com/visityerevan.am"><img src="{{asset('assets/img/icons/facebook.png')}}" ></a></div>
                        <div class="mr-3"><img src="{{asset('assets/img/icons/twitter.png')}}" ></div>
                        <div><a href="https://www.instagram.com/visityerevanofficial/" ><img src="{{asset('assets/img/icons/instagram.png')}}" ></a></div>

                    </div>
                </div>
                <div class="credits m-auto">
                    <span class="copyright">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart"></i> by <a href="https://webex.am/am/"> Webex Technologies </a>
                    </span>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/plugins/presentation-page/main.js') }}"></script>


    <script src="{{ asset('assets/js/plugins/photo_swipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/photo_swipe/init-gallery.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/paper-kit.min.js?v=2.3.1') }}" type="text/javascript"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>

    <script src="{{ asset('assets/demo/jquery.sharrre.js') }}"></script>
    <script src="{{ asset('assets/js-dev/script.js') }}" type="text/javascript"> </script>

    @yield('script')
</body>

</html>
