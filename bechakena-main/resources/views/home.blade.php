@extends('layouts.app') @section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset ('assets/css/profile_image.css')}}">


<div class="row">

    <div class="col-2 userCategory">

        <div class="row mt-2">
            <div class="col"><a href="{{route('home')}}"><button class="btn">Profile</button></a></div>
        </div>
        <div class="row mt-2">
            <div class="col"><a href="{{route('vendor')}}"><button class="btn">Vendor</button></a></div>
        </div>

    </div>

    <div class="col-9">
        <div class="row">
            <div class="col-md-8 offset-1">
                <div>


                    <div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div class="profile_img">
                                <a href=""><img class="image" src="{{ asset ('assets/img/default_user.png')}}" alt=""></a>
                                <div class="middle">
                                    <div class="text">Change Picture?</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-6">
                            <table class="table container table-borderless w-25 p-3">

                                <tbody>

                                    <tr>
                                        <th scope="row">Name:</th>
                                        <td>{{$data->name}}</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Email:</th>
                                        <td>{{$data->email}}</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Phone:</th>
                                        <td>{{$data->phone}}</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Address:</th>
                                        <td>{{$data->address}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>




                </div>
            </div>
        </div>



    </div>



</div>


<script src="https://kit.fontawesome.com/ca76eb4afc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection