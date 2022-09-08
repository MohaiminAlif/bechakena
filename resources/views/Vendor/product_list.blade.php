@extends('layouts.app') @section('title') Product List @endsection 

@section('content')

    <link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">

    <div>
        <div class="row">
            <div class="">
                <h2 class="heading-section">Products</h2>
            </div>

        </div>

        <div class="row mb-5">
            <div class="col-lg-12"><a href="{{ route('upload') }}"><button class="addButton" role="button">Insert Product</button></a></div>
        </div>
    </div>

    <section>
    @if($product_list != [])
        <div class="row">
            <div class="col-md-12">

                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>Product ID</th>
                                <th>Picture</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>action</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($product_list as $product)


                            <tr class="alert" role="alert">
                                <td>{{ $product->id }}</td>
                                <td>
                                    <img style="width: 100px; height: 100px;" src="{{url(asset ('Image/'.$product->img))}}" alt="{{$product->name}}" class="mb-3 img-fluid">
                                </td>
                                <td>
                                    <div>
                                        <span> {{$product->name}} </span>
                                        <span>{{$product->name}}</span>
                                    </div>
                                </td>
                                <td>{{$product->price}}</td>
                                <td>
                                    {{$product->category}}
                                </td>
                                <td>
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#des">Description</button>
                                </td>
                                <td><button type="button" class="btn btn-outline-info">Edit</button></td>
                                <td>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <h4 class="mt-2">Nothing is here!</h4>
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @elseif($product_list == [])
        <div class="text-center border shadow p-3 rounded">
            <h5 class="text-warning">No Product to show</h5>
        </div>
    @endif

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Modal -->
    <div class="modal fade" id="des" tabindex="-1" aria-labelledby="des" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div style="color:aliceblue">
                
            </div>

        </div>
    </div>



@endsection