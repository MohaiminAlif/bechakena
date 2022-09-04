@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset ('assets/css/list_style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/button_style.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   
</head>

<body>


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
                    <h2 class="heading-section">Users</h2>
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


    </div>
            


    
  
    

</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>

@endsection