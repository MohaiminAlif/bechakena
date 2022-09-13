@extends('admin.master') @section('admin_title') Admin Dashboard @endsection @section('admin_content')

<style>
    .admin-form {
        padding: 30px 0px 10px 0px;
        border: 1px solid rgba(192, 190, 190, 0.645);
        background: #fff;
        display: none;
        transition: 5s;
    }

</style>

<div>
    <div class="row my-2">
        <div class="text-center">
            <h2 class="heading-section text-secondary">Admin</h2>
        </div>

    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="text-center profile_img">
            @if($data->image == NULL)
            <form action="{{ route('pic_update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="middle">
                    <label for="profile_img" class="rounded pic-update-lable">Change Profile Pic</label>
                    <input id="profile_img" class="profile_img" type="file" name="image" onchange="previewFile(this);" required>
                </div>
                <img class="shadow border-lg" id="previewImg" style="height: 200px; width:200px; border-radius:100%;" src="{{ asset ('assets/img/default_user.png')}}" alt="Placeholder">
                <div class="mt-5">
                    <input class="pic-submit btn-secondary rounded shadow" id="pic-submit" type="submit" value="Save Picture">
                </div>

            </form>
            @elseif($data->image != NULL)


            <form action="{{ route('pic_update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="middle">
                    <label for="profile_img" class="rounded pic-update-lable">Change Profile Pic</label>
                    <input id="profile_img" class="profile_img" type="file" name="image" onchange="previewFile(this);" required>
                </div>
                <img class="shadow border-lg" id="previewImg" style="height: 200px; width:200px; border-radius:100%;" src="{{url(asset ('Image/User_Image/'.$data->image))}}" alt="Profile Picture">
                <div class="mt-5">
                    <input class="pic-submit btn-secondary rounded shadow" id="pic-submit" type="submit" value="Save Picture">
                </div> 
            </form>

            @endif
        </div>



            <div class="row mt-5">
                <div class="col-12">
                    <table class="table table-borderless w-25 p-3">

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
        
        <div class="row mb-5">
        <div class="col-lg-12">
            <a href="#form"><button class="addButton notification" type="button" id="formButton" role="button" >  
                <span>Make a new admin</span>
                        
            </button></a>
        </div>
    </div>
    </div>




</div>

@if(Session::has('message'))
    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
@endif

<form action="{{ route('admin_registration') }}" id="form" method="POST" class="rounded shadow mx-2 my-5 admin-form" enctype="multipart/form-data">
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
            $("#form").toggle();
        });
    });
</script>

<script>
    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#previewImg").attr("src", reader.result);
            }

            document.getElementById("pic-submit").style.display = "block";
            reader.readAsDataURL(file);
        }
    }
</script>



@endsection