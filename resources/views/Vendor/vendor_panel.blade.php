@extends('layouts.app') 
@section('title') Dashboard @endsection 

@section('content')

    <div class="container">
        <h2>{{$vdata->name}}</h2>
        <div class="row mt-3">
            <div class="col">
                <h6>Address: {{$vdata->address}}</h6>
                <h6>Phone: {{$vdata->phone}}</h6>
            </div>

            <div class="col">

            </div>
        </div>

        <div class="mt-5">
            <a href="{{ route('product_list') }}"><button type="button" class="btn btn-warning">view Product List</button></td></a>
        </div>
    </div>


@endsection