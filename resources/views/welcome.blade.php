@extends('public_master') @section('public_title') Bechakena @endsection 

@section('public_content')

<div class="container-fluid px-0">

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
</div>

    <!-- separate carousel controll -->
    <script>
        var myCarousel = document.querySelector('#banner-slider');
        var carousel = new bootstrap.Carousel(myCarousel);

        var myCarousel1 = document.querySelector('#productSliderOne');
        var carousel = new bootstrap.Carousel(myCarousel1);
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection