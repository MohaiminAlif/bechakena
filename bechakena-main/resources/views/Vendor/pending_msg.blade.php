@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
</head>
<body>

    <div class="row">

        <div class="col-2 userCategory">
            
            <div class="row mt-2"><div class="col"><a href="{{route('home')}}"><button class="btn">Profile</button></a></div></div>
            <div class="row mt-2"><div class="col"><a href="{{route('vendor')}}"><button class="btn">Vendor</button></a></div></div>
            
        </div>

        <div class="col-9">

                
            <div class="container card mt-5">

                <h3>Please confirm the given information is correct then click 'Okay' to confirm the registration.</h3> 
                <h5> You will get an confirmation mail of registered Beckhakena Vendor within 2-3 working days</h5>

                <div class="card-body">
                    <form action="{{ route('vendor_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        
                        <div class="form-group mb-3">
                            <label for="">Vendor Name</label>
                            <h5 >{{$data->name}}</h5>
                        </div>

                                                
                        <div class="form-group mb-3">
                            <label for="">Vendor Address</label>
                            <h5 >{{$data->address}}</h5>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Vendor Phone Number</label>
                            <h5 >{{$data->phone}}</h5>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Vendor City</label>
                            <h5 >{{$data->city}}</h5>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Zip</label>
                            <h5 name="zip" for='zip' id="zip">{{$data->zip}}</h5>
                        </div>

                        <input type="hidden" id="id" name="id" value="{{$data->id}}">


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Okay') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</body>
</html>




@endsection
