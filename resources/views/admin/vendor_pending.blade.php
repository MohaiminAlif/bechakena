@extends('admin.master') @section('admin_title') Pending List @endsection 
@section('admin_content')

<link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">
<div class="row my-5">
    <div class="text-center">
        <h2 class="heading-section text-secondary">Pending List</h2>
    </div>

</div>


<section>
    <div class="row mt-5">
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

                        @forelse($lists as $list) @if($list->status == "pending")

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

                            <td>
                                <a href="{{ url('vendor_deatails/'.$list->id) }}" class="btn btn-warning btn-sm">Show more</a>
                            </td>

                            <td>
                                <a href="{{ url('delete_vendor_application/'.$list->id) }}" class="btn btn-danger btn-sm" onclick="myFunction()">delete</a>
                            </td>

                        </tr>
                        @endif @empty
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

<div class="box"></div>


@endsection