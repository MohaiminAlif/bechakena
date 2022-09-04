<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/button_style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/product.css')}}">



    <title>Bechakena</title>
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

    <div class="row">

    <div class="col-2"></div>

    <div class="col-9">
    <section style="margin-top: 100px;" class="row mb-5">


        @forelse($datas as $data)



            <div class="mt-5 rounded" style="width: 350px;">
                <div class="card card-product">
                    <div class="card-body">

                        <div class="text-center position-relative ">
                            <div class=" position-absolute top-0 start-0">
                                <span class="badge bg-danger">{{$data->category}}</span>
                            </div>
                            <a href="{{ url('single_product/'.$data->id)}}"> <img  style="width: 150px; height: 200px;" src="{{url(asset ('Image/'.$data->img))}}" alt="{{$data->name}}" class="mb-3 img-fluid"></a>


                        </div>
                        <div class="text-small mb-1"><a href="{{ url('products/'.$data->category)}}" class="text-decoration-none text-muted"><small>{{$data->category}}</small></a>
                        </div>
                        <h2 class="fs-6"><a href="{{ url('single_product/'.$data->id)}}" class="text-inherit text-decoration-none">{{$data->name}}</a></h2>
                        <div>

                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small> <span class="text-muted small"></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">Taka: {{$data->price}}</span> <!-- <span class="text-decoration-line-through text-muted">Taka: {{$data->price}}</span>--> <!-- {for discount use only} -->
                            </div>
                            <div><a href="#!" class="btn btn-primary btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Add</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

            
            @empty
            <tr>
                <td>
                    <h4 class="mt-2">Nothing is here!</h4>
                </td>
            </tr>

                            
        @endforelse
          
    
    </section>
    </div>
    </div>
    
</body>
</html>