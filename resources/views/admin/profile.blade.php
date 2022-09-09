@extends('admin.master') @section('admin_title') Admin Dashboard @endsection 

@section('admin_content')

    <div>
        <div class="row my-2">
            <div class="text-center">
                <h2 class="heading-section">Admin</h2>
            </div>

        </div>



        <div class="row mb-5">
            <div class="col-lg-12"><a href="{{ route('vendor_pending_list') }}"><button class="addButton notification" role="button">  
                        <span>Make a new admin</span>
                        
                    </button></a></div>
        </div>

    </div>



@endsection