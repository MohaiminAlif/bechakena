<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/profile_image.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/button_style.css')}}">


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="col-2">
                    <a href="/" class="logo">

                        <img src="{{ asset ('assets/img/logov1.png')}}" alt="Bechakena Logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                        <h6>already registered?, <a href="/">go back main page</a></h6>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Modal -->
        <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body" style="padding: 0px;">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="myform bg-dark">
                            <h1 class="text-center">Login Form</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3 mt-4">
                                    <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>



                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror

                                </div>

                                <div class="mb-3">
                                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>


                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror

                                </div>

                                <div class="row mb-3">
                                    <div class="form-check col-6">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    </div>

                                    <div class="col-6">

                                        @if (Route::has('password.request'))
                                        <a style="font-size:smaller;" class="" href="{{ route('password.request') }}">Forgot Your Password?</a> @endif
                                    </div>


                                </div>

                                <div class="row mb-0">
                                    <div class="">
                                        <button type="submit" class="btn btn-light mt-3">LOGIN</button>

                                    </div>
                                </div>
                            </form>
                            <p>Not a member? <a href="{{ route('register') }}">Signup now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="px-0 py-0">
            <div class="container mx-0 px-0">
                <div class="row">
                    <div class="col-3 userCategory" style="height: 100vh;">

                        <div class="row">
                            <div class="col"><a href="{{route('home')}}"><button class="addButton">Profile</button></a></div>
                        </div>
                        <div class="row">
                            <div class="col"><a href="{{route('vendor')}}"><button class="addButton">Vendor</button></a></div>
                        </div>

                    </div>
                    <div class="col-9 py-5">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer  -->
    <div class="container-fluid border-top theme-bg">
        <footer class="px-4">
            <div class="d-flex justify-content-center  border-top">
                <p class="text-center">&copy; 2022 Developed by CODETREE</p>

            </div>
        </footer>
    </div>
    <!-- Footer End -->

    <script src="https://kit.fontawesome.com/ca76eb4afc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>