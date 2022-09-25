@extends('admin.master') @section('admin_title') User List @endsection 
@section('admin_content')

    <link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/list_style2.css')}}">

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


    <!-- New Table demo -->




    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 mx-auto bg-white rounded shadow">

                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Zip</th>
                                <th>Role</th>
                            </tr>
                        </thead>

                        <tbody>

@forelse($lists as $list)


<tr>
    <td>{{ $list->id }}</td>

    <td>
        <div>
            {{$list->name}}

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
                </div><!-- End -->
                
            </div>
        </div>
    </div>



    <!-- another table demo -->

    <h1>Aother table demo</h1>
    
    <div id="datatable" data-mdb-max-height="460" ></div>
    
    <!-- end -->

    <script>

        const basicData = {
        columns: ['Name', 'Position', 'Office', 'Age', 'Start date', 'Salary'],
        rows: [
        ["Tiger Nixon", "System Architect", "Edinburgh", "61", "2011/04/25", "$320,800"],
        ["Garrett Winters", "Accountant", "Tokyo", "63", "2011/07/25", "$170,750"],
        ["Ashton Cox", "Junior Technical Author", "San Francisco", "66", "2009/01/12", "$86,000"],
        ["Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "22", "2012/03/29", "$433,060"],
        ["Airi Satou", "Accountant", "Tokyo", "33", "2008/11/28", "$162,700"],
        ["Brielle Williamson", "Integration Specialist", "New York", "61", "2012/12/02", "$372,000"],
        ["Herrod Chandler", "Sales Assistant", "San Francisco", "59", "2012/08/06", "$137,500"],
        ["Rhona Davidson", "Integration Specialist", "Tokyo", "55", "2010/10/14", "$327,900"],
        ["Colleen Hurst", "Javascript Developer", "San Francisco", "39", "2009/09/15", "$205,500"],
        ["Sonya Frost", "Software Engineer", "Edinburgh", "23", "2008/12/13", "$103,600"],
        ["Jena Gaines", "Office Manager", "London", "30", "2008/12/19", "$90,560"],
        ["Quinn Flynn", "Support Lead", "Edinburgh", "22", "2013/03/03", "$342,000"],
        ["Charde Marshall", "Regional Director", "San Francisco", "36", "2008/10/16", "$470,600"],
        ["Haley Kennedy", "Senior Marketing Designer", "London", "43", "2012/12/18", "$313,500"]
        ],
        };

        const datatable = document.getElementById('datatable');

        new Datatable(datatable, basicData);

    </script>


@endsection