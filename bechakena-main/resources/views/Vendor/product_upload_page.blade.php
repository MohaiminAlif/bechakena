@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Insert</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>


    <div class="row">

        <div class="col-2 userCategory">

            <div class="row mt-2">
                <div class="col"><a href="{{route('home')}}"><button class="btn">Profile</button></a></div>
            </div>
            <div class="row mt-2">
                <div class="col"><a href="{{route('vendor')}}"><button class="btn">Vendor</button></a></div>
            </div>

        </div>

        <div class="col-9 container">
    
            <div>
                <div class="row offset-3">
                    <div class="col">
                        <h2 class="">Product Insert Page</h2>
                    </div>
                    
                </div>


            </div>

            <section class="mt-5 card-body rounded shadow col-10" >

                <div class="mt-5 row mb-2">
                    

                    <form action="{{ route('insert_product') }}" method="post" enctype="multipart/form-data"> 
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <input name="name" type="text" class="form-control" placeholder="Product Name" aria-label="name" required>
                            </div>


                            <div class="col-6">
                                <select class="form-select" name="category" aria-label="Default select example">
                                    <option selected>Category</option>
                                    <option value="Mobile">Mobile</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="TV">TV</option>
                                </select>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-3 mt-3">
                                <input name="price" type="number" class="form-control" placeholder="Price" aria-label="price" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-3"><textarea name="description" class="form-control" id="description" rows="8" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                           
                            <div class="col-8 mt-3">
                                <label class="text-muted" for="product_color" class="form-label">Insert Image Here</label>
                                <input name="img" type="file" class="form-control" required>
                            </div>

                        </div>
                                            
                        <button class="btn btn-secondary offset-5" type="submit">Submit</button>
                        <a href="{{route('product_list')}}"><button class="btn btn-danger" type="button">Cancel</button></a>
                     
                        

                    </form>

   


                </div>
            </section>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>

@endsection



