<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('public_title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/button_style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/product.css')}}">

    <link rel="stylesheet" href="{{ asset ('assets/css/video.popup.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/img_slider.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css//productViewStyle.css')}}">

</head>


<body>

    <div class="container-fluid px-0">
        <header class="py-1 border-bottom fixed-top header-color">
            <div class="row align-items-baseline mx-0">
                <!-- logo -->
                <div class="col-2">
                    <a href="/" class="logo">

                        <img src="{{ asset ('assets/img/logov1.png')}}" alt="">
                    </a>
                </div>
                <!-- Header Search -->
                <div class="col-7">

                    <div class="input-group">
                        <select id="resizing_select">
                <option>All</option>
                <option>Longer</option>
                <option>A very very long string...</option>
                </select>
                        <select id="width_tmp_select">
                <option id="width_tmp_option"></option>
                </select>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">
                <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    @if (Route::has('login'))
                    <div class="hidden ">
                        @auth
                        <a href="{{ url('/home') }}" class=""><button class="btn-sm btn-warning">Home</button></a> @else
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#ModalForm">
                            Log In
                        </button> 
                        @endauth
                    </div>
                    @endif
                </div>

            </div>
        </header>

        <main style="margin-top:52px;">
            @yield('public_content')
        </main>
    </div>

    <!-- Footer  -->
    <div class="container-fluid  border-top theme-bg mt-5">
        <footer class="pt-5 px-4">
            <div class="row">
                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0  text-light">About</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                    <div>
                        <ul class="list-unstyled d-flex ">
                            <li class="ms-3">
                                <a class="link-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="link-light" href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="link-light" href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center  border-top">
                <p class="text-center">&copy; 2022 Developed by CODETREE</p>

            </div>
        </footer>
    </div>
    <!-- Footer End -->

    <!-- Modal -->
    <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="myform bg-dark">
                        <h1 class="text-center" style="color:white;">Login Form</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3 mt-4">
                                <label for="email" class="col-form-label text-md-end" style="color:white;">{{ __('Email Address') }}</label>



                                <input id="email" style="color:white;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror

                            </div>

                            <div class="mb-3">
                                <label for="password" class="col-form-label text-md-end" style="color:white;">{{ __('Password') }}</label>


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
                                    <a style="font-size:smaller;color:white;" class="" href="{{ route('password.request') }}">Forgot Your Password?</a> @endif
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Jquery Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Header Script -->
    <script>
        $(document).ready(function() {
            $('#resizing_select').change(function() {
                $("#width_tmp_option").html($('#resizing_select option:selected').text());
                $(this).width($("#width_tmp_select").width());
            });
        });
    </script>


</body>

</html>