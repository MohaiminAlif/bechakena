@extends('layouts.app') 
@section('title') Dashboard @endsection 

@section('content') 
    @if(Session::has('message'))
        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
    @endif

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

@endsection