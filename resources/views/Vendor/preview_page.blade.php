<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>

    <!--bootstrap file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>


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

                    </div>
                    <div class="row middle-section">


                    </div>

                </div>

                <div class="col-lg-4 ">

                    <div class="card-body ">
                        <h5 class="card-title">Product Description</h5>
                        <div style="color:black">
                            <?php
                                echo "$product->description";
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-4">
                    <a href="{{route('product_list')}}"><button class="btn btn-secondary" type="button">Done</button></a>
                </div>
            </div>

        </div>
    </div>


    <script src="{{asset('/')}}assets/js/jquery-3.6.1.min.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>