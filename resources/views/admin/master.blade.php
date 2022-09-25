<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('admin_title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset ('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/lightbox.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/header_style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/profile_image.css')}}">

    <style>
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        
        .sidenav a:hover {
            color: #f1f1f1;
        }
        
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-light bg-white shadow-sm">
            <div class="container mx-0">
                <div class="col-1"> 
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></div>
                <div class="col-2">
                    <a href="/" class="logo">
                        <img src="{{ asset ('assets/img/logov1.png')}}" alt="Bechakena Logo">
                    </a>
                </div>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                        <h6>already registered?, <a href="/">go back main page</a></h6>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                <a class="dropdown-item" href="{{ route('reset') }}" onclick="event.preventDefault();
                                                     document.getElementById('re-pass').submit();">Change Password</a>

                                <form id="re-pass" action="{{ route('reset') }}" method="POST" class="d-none">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                </form>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="px-0 py-0">
            <div class="container mx-0 px-0">
                    <div id="mySidenav" class="sidenav">

                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                        <div class="row mt-2">
                            <div class="col"><a href="{{route('admin_profile')}}"><button class="addButton">Profile</button></a></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col"><a href="{{route('user_list')}}"><button class="addButton">User</button></a></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col"><a href="{{route('vendor_list')}}"><button class="addButton">Vendor</button></a></div>
                        </div>
                    </div>

                <div class="d-flex mt-2">
                    
                    <div class="mx-5"> @yield('admin_content')</div>
                </div>
            </div>
    </div>
    </main>
    </div>

    <!-- Footer  -->
    <div class="border-top theme-bg">
        <footer class="px-4">
            <div class="d-flex justify-content-center  border-top">
                <p class="text-center">&copy; 2022 Developed by CODETREE</p>

            </div>
        </footer>
    </div>
    <!-- Footer End -->


    <script src="{{asset('/')}}assets/js/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/ca76eb4afc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/vendor/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/vendor/lightbox-plus-jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/vendor/lightbox-plus-jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/lightbox.js')}}"></script>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>

</html>