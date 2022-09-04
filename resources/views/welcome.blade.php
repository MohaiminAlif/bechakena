<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/button_style.css')}}">


    <title>Bechakena</title>
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

        <nav class="py-2 px-3 bg-light border-bottom mt-5">
            <div class="d-flex flex-wrap">

                <ul class="nav me-auto">
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link link-dark text-decoration-none px-2 active" aria-current="page">
               
              </a> -->
                        <a class="nav-link link-dark text-decoration-none px-2  " data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class="fa-solid fa-bars"></i>
                        </a>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div>
                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                                </div>
                                <div class="dropdown mt-3">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                      Dropdown button
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2 active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark text-decoration-none px-2">About</a></li>
                </ul>

            </div>
        </nav>

        <section class="overlapping">
            <!-- Main Page Slider Section -->
            <div id="banner-slider" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="{{ asset ('assets/img/logov1.png')}}" alt=""> -->

                        <img src="{{ asset ('assets/img/s5.jpg')}}" class="d-block w-100 slider-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset ('assets/img/s6.jpg')}}" class="d-block w-100 slider-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset ('assets/img/s7.jpg')}}" class="d-block w-100 slider-img" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#banner-slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
                <button class="carousel-control-next" type="button" data-bs-target="#banner-slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>

            <!-- Cards start-->
            <div class="row row-cols-1 row-cols-md-4 mx-0 px-3 overlapped-card-section">
                <div class="col ps-0 pe-2 ">
                    <div class="card h-100 text-center border-0  shadow-one    ">
                        <h5 class="card-title py-3">Gadgets and Gaming accessories</h5>

                        <img src="{{ asset ('assets/img/c1.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <a href="{{ url('products/gga') }}" class="link-dark text-decoration-none card-text ">See More...</a>
                        </div>


                    </div>
                </div>

                <div class="col ps-2 pe-2">
                    <div class="card h-100 border-0 shadow-one    ">
                        <img src="{{ asset ('assets/img/p5.jpg')}}" class="card-img-top  " alt="...">
                        <h5 class="card-title py-3 text-center">Mobile</h5>
                        <div class="card-body text-center">
                            <a href="{{ url('products/mobile')}}" class="link-dark text-decoration-none ">See More...</a>
                        </div>

                    </div>
                </div>
                <div class="col ps-2 pe-2">
                    <div class="card h-100 border-0 shadow-one">
                        <h5 class="card-title text-center py-3">Television</h5>
                        <img src="{{ asset ('assets/img/p8.jpg')}}" class="card-img-top" alt="TV">
                        <div class="card-body text-center">
                            <a href="   " class="link-dark text-decoration-none ">See More...</a>
                        </div>

                    </div>
                </div>
                <div class="col ps-2 pe-0">
                    <div class="card h-100 border-0 shadow-one">
                        <img src="{{ asset ('assets/img/p9.jpg')}}" class="card-img-top" alt="Laptop">
                        <h5 class="card-title text-center py-3">Laptop</h5>
                        <div class="card-body text-center">
                            <a href="{{ url('products/laptop')}}" class="link-dark text-decoration-none ">See More...</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Cards end -->

        <!-- Product Slider One -->
        <section class="product-slider-one">
            <h1 class="text-center my-4">Featured Products</h1>
            <div id="productSliderOne" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row px-4">
                            <div class="col-md-4  ">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p1.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4  ">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p2.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4  ">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p3.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row px-4">
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p3.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p2.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p1.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row px-4">
                            <div class="col-md-3">
                                <a href="{{ url('featured_product/mobile') }}" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p5.jpg')}}" alt="">
                                    <h3>Mobile</h3>
                                </a>
                                
                            </div>
                            <div class="col-md-3">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p1.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p3.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p7.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productSliderOne" data-bs-slide="prev">
          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-left"></i>
          </span>
          <span class="visually-hidden">Previous</span>
        </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productSliderOne" data-bs-slide="next">
          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-right"></i>
          </span>
          <span class="visually-hidden">Next</span>
        </button>

            </div>
        </section>
        <!-- Product Slider One End-->

        <!-- Product Slider Two-->
        <section class="product-slider-two">
            <h1 class="text-center my-4">Top Reviewd Products</h1>
            <div id="producSliderTwo" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row px-4">
                            <div class="col-md-3  ">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p3.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-3  ">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p4.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-3  ">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p6.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-3  ">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p5.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row px-4">
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p4.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p3.webp')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p5.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row px-4">
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p5.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p4.jpg')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="text-center text-decoration-none link-dark">
                                    <img src="{{ asset ('assets/img/p3.webp')}}" alt="">
                                    <h3>Kitchen</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#producSliderTwo" data-bs-slide="prev">
          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-left"></i>
          </span>
          <span class="visually-hidden">Previous</span>
        </button>
                <button class="carousel-control-next" type="button" data-bs-target="#producSliderTwo" data-bs-slide="next">

          <span class="slide-control" aria-hidden="true">
            <i class="fa-solid fa-arrow-right"></i>
          </span>
          <span class="visually-hidden">Next</span>
        </button>
            </div>
        </section>
        <!-- Product Slider Two ENd-->


        <!-- Footer  -->
        <div class="container-fluid  border-top theme-bg">
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="myform bg-dark">
                        <h1 class="text-center">Login Form</h1>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3 mt-4">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

 
                                
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="mb-3">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                           
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="row mb-3">
                            <div class="form-check col-6">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            </div>

                            <div class="col-6">

                            @if (Route::has('password.request'))
                                    <a style="font-size:smaller;" class="" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                    @endif
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


    <!-- separate carousel controll -->
    <script>
        var myCarousel = document.querySelector('#banner-slider');
        var carousel = new bootstrap.Carousel(myCarousel);

        var myCarousel1 = document.querySelector('#productSliderOne');
        var carousel = new bootstrap.Carousel(myCarousel1);
    </script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>