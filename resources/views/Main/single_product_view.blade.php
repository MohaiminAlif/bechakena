<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>

    <!--bootstrap file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- internal CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/video.popup.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/img_slider.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css//productViewStyle.css')}}"> 
    <link rel="stylesheet" href="{{ asset ('assets/css/button_style.css')}}">


</head>

<body>

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

    <div class="row mt-5">

        <div class="col-1"></div>

        <div class="container-fluid px-0 mt-5 col-10">

            <div class="main-part">
                <div class="row gx-5">

                    <div class="col-4">

                        <div class="row img-container" style="height:350px ; width: 400px">
                            <div>
                                <img id="#img-container" src="{{url(asset ('Image/'.$product->img))}}" height="350px" width="400px">
                            </div>

                        </div>


                    </div>
                    <div class="col-4 offset-1">
                        <div class="row middle-section">
                            <h5>{{$product->name}}</h5>
                        </div>
                        <div class="row middle-section">
                            
                            
                        </div>
                        <div class="row">
                            <h6>Color Family:</h6>

                            <div class="xzoom-thumbs">
                                <ul>
                                    <button class="button" id="btn" onclick=color1();><img class="img-nav" src="{{ asset ('assets/img/black/black00.jpg')}}" alt=""></button>
                                    <button class="button" id="btn" onclick=color2();><img class="img-nav" src="{{ asset ('assets/img/orange/orange00.jpg')}}" alt=""></button>
                                    <button class="button" id="btn" onclick=color3();><img class="img-nav" src="{{ asset ('assets/img/white/white00.jpg')}}"></button>
                                </ul>
                            </div>
                        </div>



                    </div>

                    <div class="col-3">
                                <div class="card-body ">
                                <h5 class="card-title">Product Description</h5>
                                <h6 class="card-text ">{{$product->description}}</h6>
                            </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

    



    <!--popUpVdo-script-->
    <script>
        $(function() {
            $("#video").videoPopup();
        });
    </script>
 

    <script src="{{ asset ('assets/js/img_slider.js')}}"></script>   
 
    <!--video-popup-files-->
    <script src="{{ asset ('assets.js.video_popup.js')}}"></script>

    <!--image_SElector-->
    <script src="{{ asset ('assets/js/img_selector.js')}}"></script>

  

</body>

</html>
