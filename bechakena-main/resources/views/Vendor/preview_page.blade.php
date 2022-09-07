@extends('layouts.app')

@section('content')

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

<div class="container-fluid px-0">

    <div class="main-part">
        <div class="row">

            <div class="col-lg-4">


                <div class="row img-container" style="height:350px ; width: 400px">
                    <div>
                        <img id="#img-container" src="{{url(asset ('Image/'.$product->img))}}" height="350px" width="400px">
                    </div>

                </div>


            </div>
            <div class="col-lg-4">
                <div class="row middle-section">
                    <h3>{{$product->name}}</h3>
                    <h3>{{$product->id}}</h3>
                </div>
                <div class="row middle-section">
                    
                     
                </div>

                <div class="row mt-5">
                    <p>Color Family:</p>

                </div>

                <div class="row">

                    <div class="xzoom-thumbs mt-0">
                        <ul>
                            <button class="button" id="btn" onclick=color1();><img class="img-nav" src="{{ asset ('assets/img/black/black00.jpg')}}" alt=""></button>
                            <button class="button" id="btn" onclick=color2();><img class="img-nav" src="{{ asset ('assets/img/orange/orange00.jpg')}}" alt=""></button>
                            <button class="button" id="btn" onclick=color3();><img class="img-nav" src="{{ asset ('assets/img/white/white00.jpg')}}"></button>
                        </ul>
                    </div>

                    <div class="col-lg-12"><a href="{{  url('pic_upload_page/'.$product->id) }}"><button class="addButton" role="button">Add Color</button></a></div>
                    
                </div>



            </div>

            <div class="col-lg-4 ">
                <div class=" ">
                    <div class="card-body ">
                        <h5 class="card-title">Product Description</h5>
                        <p class="card-text ">{{$product->description}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4 offset-5">
                <a href="{{route('product_list')}}"><button class="btn btn-danger" type="button">Done</button></a>
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

@endsection