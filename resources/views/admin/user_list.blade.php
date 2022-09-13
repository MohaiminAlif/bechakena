@extends('admin.master') @section('admin_title') User List @endsection 
@section('admin_content')

    <link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">

    <div>
        <div class="row my-5">
            <div class="text-center">
                <h2 class="heading-section text-secondary">Users</h2>
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
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Zip</th>
                                <th>Role</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($lists as $list)


                            <tr class="alert" role="alert">
                                <td>{{ $list->id }}</td>

                                <td>
                                    <div class="name">
                                        <span> {{$list->name}} </span>

                                    </div>
                                </td>
                                <td>{{$list->phone}}</td>
                                <td>
                                    {{$list->email}}
                                </td>
                                <td>
                                    {{$list->address}}
                                </td>
                                <td>
                                    {{$list->city}}
                                </td>
                                <td>
                                    {{$list->zip}}
                                </td>
                                <td>
                                    {{$list->role_id}}
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
    </section>

    <div class="box"></div>


@endsection