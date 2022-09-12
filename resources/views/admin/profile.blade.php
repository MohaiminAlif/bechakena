@extends('admin.master') @section('admin_title') Admin Dashboard @endsection @section('admin_content')

    <style>
        form {
            padding: 30px 0px 10px 0px;
            border: 1px solid rgba(192, 190, 190, 0.645);
            background: #fff;
            display: none;
            transition: 5s;
        }
        
        #formButton {
            display: block;
        }
    </style>

    <div>
        <div class="row my-2">
            <div class="text-center">
                <h2 class="heading-section">Admin</h2>
            </div>

        </div>

        <div class="row">
            <div class="col-6">
                <div class="profile_img">
                    <a href=""><img class="image" style="height: 200px; width:200px; border-radius:100%;" src="{{ asset ('assets/img/default_user.png')}}" alt=""></a>
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



        <div class="row mb-5 mt-5">
            <div class="col-lg-12">
                <button class="addButton notification" type="button" id="formButton" role="button">  
                <span>Make a new admin</span>
                        
            </button>
            </div>
        </div>

    </div>

    @if(Session::has('message'))
    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
    @endif

    <form action="{{ route('admin_registration') }}" id="form1" method="POST" class="rounded shadow" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-3">
            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus> @error('phone')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

            <div class="col-md-6">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus> @error('address')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus> @error('city')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="zip" class="col-md-4 col-form-label text-md-end">{{ __('ZIP') }}</label>

            <div class="col-md-6">
                <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" required autocomplete="zip" autofocus> @error('zip')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
            </div>
        </div>


        <div class="row mb-0">
            <div class="col-md-6 offset-md-4 text-center">
                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
            </div>
        </div>

    </form>


    <script src="{{asset('/')}}assets/js/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#formButton").click(function() {
                $("#form1").toggle();
            });
        });
    </script>


@endsection