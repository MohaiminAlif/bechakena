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

                
            <div class="container mt-5">

                <h2>Please Stay Put, We have received your application, We will soon look into it.</h2>


            </div>


        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</body>
</html>




@endsection
