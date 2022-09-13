@extends('admin.master') @section('admin_title') Vendor List @endsection 
@section('admin_content')

    <link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">

    <div>
        <div class="row my-2">
            <div class="text-center">
                <h2 class="heading-section">Vendors</h2>
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
    </section>


@endsection