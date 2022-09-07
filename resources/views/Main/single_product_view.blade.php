@extends('public_master') @section('public_title') Products @endsection 


@section('public_content')

    <div class="row">

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
                            <div style="color:black">
                                <?php
                                    echo "$product->description";
                                ?>
                            </div>
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


@endsection