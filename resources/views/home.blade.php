@extends('layouts.app') @section('title') Dashboard @endsection @section('content')


<div class="container">
    <div class="row mb-5 mt-5 justify-content-center">
        <div class="text-center profile_img">
            <img class="shadow border-lg" style="height: 200px; width:200px; border-radius:100%;" src="{{ asset ('assets/img/default_user.png')}}">
            <div class="middle">
                <a href="">
                    <div class="text-primary">Change Picture?</div>
                </a>
            </div>
        </div>



        <div class="row mt-5 mb-5">
            <div class="col-12">
                <table class="table table-borderless w-25 p-3">

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

@endsection