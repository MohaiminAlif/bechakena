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
                                <th>Delete</th>
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
                                <td> 
                                    <a href="{{ url('delete_product/'.$product->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <h4 class="mt-2">No product here!</h4>
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @elseif($product_list == [])
        <div class="border shadow p-3 mb-5 rounded">
            <div class="text-center">
                <h3 class="text-primary">Welcome {{ Auth::user()->name }}</h3>
                <h4 class="text-secondary">You have not uploaded any product <br>
                    To upload a new prodcut click on the "Inser Product"
                </h4>
            </div>
            <div class="mt-5 -mb-5">
                                
                <h4>Rules:</h4>
                <ol>
                <h5><li>You must fill all the detials correctly</li>
                <li>Select the correct category</li>
                <li>Upload a clear image of the prodcut</li></h5>
                </ol> 
            </div>

        </div>


    @endif

    </section>

    <div class="box"></div>

    <!-- Modal -->
    <div class="modal fade" id="des" tabindex="-1" aria-labelledby="des" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div style="color:aliceblue">
                <p>
                    <?php
                        echo "$product->description";
                    ?>
                </p>
            </div>

        </div>




@endsection