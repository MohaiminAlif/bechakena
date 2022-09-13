@extends('layouts.app') 
@section('title') Dashboard @endsection 

@section('content')

<div class="container">
        <div class="row mb-5 mt-4 justify-content-center">
            <div class="text-center profile_img">
                @if($vdata->company_image == NULL)
                <form action="{{ route('vendor_pic_update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="middle">
                        <label for="profile_img" class="rounded pic-update-lable">Change Profile Pic</label>
                        <input id="profile_img" class="profile_img input-profile" type="file" name="image" onchange="previewFile(this);" required>
                    </div>
                    <img class="shadow border-lg" id="previewImg" style="height: 200px; width:200px; border-radius:100%;" src="{{ asset ('assets/img/default_user.png')}}" alt="Placeholder">
                    <div class="mt-5">
                        <input class="pic-submit btn-secondary rounded shadow" id="pic-submit" type="submit" value="Save Picture">
                    </div> 
                </form>
                @elseif($vdata->company_image != NULL)


                <form action="{{ route('vendor_pic_update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="middle">
                        <label for="profile_img" class="rounded pic-update-lable">Change Profile Pic</label>
                        <input id="profile_img" class="profile_img input-profile" type="file" name="image" onchange="previewFile(this);" required>
                    </div>
                    <img class="shadow border-lg" id="previewImg" style="height: 200px; width:200px; border-radius:100%;" src="{{url(asset ('Image/Vendor_Documents/'.$vdata->company_image))}}" alt="Profile Picture">
                    <div class="mt-5">
                        <input class="pic-submit btn-secondary rounded shadow" id="pic-submit" type="submit" value="Save Picture">
                    </div> 
                </form>

                @endif
            </div>



            <div class="row mt-3 mb-5">
                <div class="col-12">
                    <table class="table table-borderless w-25 p-3">

                        <tbody>

                            <tr>
                                <th scope="row">Name:</th>
                                <td>{{$vdata->name}}</td>

                            </tr>
                            <tr>
                                <th scope="row">Phone:</th>
                                <td>{{$vdata->phone}}</td>

                            </tr>
                            <tr>
                                <th scope="row">Address:</th>
                                <td>{{$vdata->address}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
         </div>
         <a href="{{ route('product_list') }}"><button type="button" class="btn btn-warning">view Product List</button></td></a>

       
        
    </div>

    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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