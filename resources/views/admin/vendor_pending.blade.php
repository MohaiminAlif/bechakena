@extends('layouts.app')

@section('title')
Vendor Pending
@endsection

@section('content')

    <link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/button_style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/lightbox.min.css')}}">


    <div class="row">

        <div class="col-2 userCategory">
            
            <div class="row mt-2"><div class="col"><a href="{{route('admin_profile')}}"><button class="btn">Profile</button></a></div></div>
            <div class="row mt-2"><div class="col"><a href="{{route('user_list')}}"><button class="btn">User</button></a></div></div>
            <div class="row mt-2"><div class="col"><a href="{{route('vendor_list')}}"><button class="btn">Vendor</button></a></div></div>
            
        </div>

        <div class="col-9">
        
            <div>
                <div class="row">
                    <div class="">
                        <h2 class="heading-section mb-5">Vendors Pending List</h2>
                    </div>
                    
                </div>

            </div>

            <section>
                <div class="row">
                    <div class="col-md-12">
                    
                        <div class="table-wrap">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>Vendor ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Zip</th>
                                        <th>Doc</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @forelse($lists as $list)
                            
                                    @if($list->status == "pending")
                                        
                                    <tr class="alert" role="alert">
                                        <td>{{ $list->id }}</td>
                                        <td>
                                            {{$list->name}}
                                        </td>
                                    
                                        <td>
                                            {{$list->phone}}
                                        </td>

                                        
                                        <td>{{$list->address}}</td>

                                        <td>
                                            {{$list->city}}
                                        </td>
                                        <td>
                                            {{$list->zip}}
                                        </td>

                                        
                                        <td>
                                            <a href="{{url('Image/Vendor_Documents/'.$list->trade_licence)}}" data-lightbox="{{ $list->id }}" target="_blank"><img style="height:100px; width: 80px" src="{{url('Image/Vendor_Documents/'.$list->trade_licence)}}"></a>
                                        </td>                                 

                                        <td >
                                            <a href="{{ url('vendor_deatails/'.$list->id) }}" class="btn btn-warning btn-sm">Show more</a>
                                        </td>

                                        <td >
                                            <a href="{{ url('delete_vendor_application/'.$list->id) }}" class="btn btn-danger btn-sm">delete</a>
                                        </td>

                                    </tr>
                                    @endif

                                    @empty
                                    <tr>
                                        <td>
                                            <h4 class="mt-2">No Vendors Applied</h4>
                                        </td>
                                    </tr>
                                @endforelse
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>


    <script type="text/javascript" src="{{ asset ('assets/js/vendor/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/vendor/lightbox-plus-jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/vendor/lightbox-plus-jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/lightbox.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


@endsection