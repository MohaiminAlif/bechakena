@extends('admin.master') @section('admin_title') Vendor List @endsection 
@section('admin_content')

    <link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">
    <div>
        <div class="row my-5">
            <div class="text-center">
                <h2 class="heading-section text-secondary">Vendors</h2>
            </div>

        </div>

        @if($count > 0)

        <div class="row mb-5">
            <div class="col-lg-12"><a href="{{ route('vendor_pending_list') }}"><button class="pendingButton notification" role="button">  
                        <span>Vendor Pending</span>
                        <span class="badge badge-light">{{$count}}</span>
                    </button></a></div>
        </div>
        @endif



    </div>

    <section>
    @if($lists != [])
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
                                <th>Details</th>
                                <th>Delete</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($lists as $list) @if($list->status == "Vendor")

                            <tr class="alert" role="alert">
                                <td>{{ $list->id }}</td>
                                <td>
                                    {{$list->name}}
                                </td>

                                <td>{{$list->address}}</td>
                                <td>
                                    {{$list->phone}}
                                </td>
                                <td>
                                    {{$list->city}}
                                </td>
                                <td>
                                    {{$list->zip}}
                                </td>
                                <td>
                                    <a href="{{ url('vendor_deatails/'.$list->id) }}" class="btn btn-warning btn-sm">Show more</a>
                                </td>

                                <td>
                                    <a href="{{ url('delete_vendor_application/'.$list->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endif @empty
                            <tr>
                                <td>
                                    <h4 class="mt-2">No Vendor in the List</h4>
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @elseif($lists == [])
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
    <div class="box">

    </div>


@endsection