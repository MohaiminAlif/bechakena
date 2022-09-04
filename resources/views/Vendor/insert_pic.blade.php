@extends('layouts.app') @section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <section class="container mt-5 col-6">
        <div class="card text-muted rounded shadow" style="margin:0 30px 0 30px ;">
        
            <form class="card-body color_insert_form" action="{{ route('insert_color') }}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="mb-3 col-3">
                        <label for="color" class="form-label">Color name</label>
                        <input name="color" type="text" class="form-control" id="color">

                    </div>
                    <input name="productID" type="hidden" class="form-control hidden" id="productID" value="{{$pID}}">
                    
                    <div class="mb-3 col-2">
                        <label for="units" class="form-label">units</label>
                        <input name="unit" type="number" class="form-control" id="unit" aria-describedby="unit">

                    </div>

                    <div class="row">

                        <div class="row">
                            <div class="mb-4">
                                <label for="product_color" class="form-label">Image</label>
                                <input name="product_color" class="form-control" type="file" id="product_color">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary" style="float:right;">Submit</button>
            </form>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>

@endsection