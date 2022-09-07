@extends('layouts.app') 
@section('title') Dashboard @endsection 

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vendor Registration Form') }}</div>

                <div class="card-body">
                    <form action="{{ route('vendor_create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name of your Organization') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address of the Organization') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('email') }}" required autocomplete="phone">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required autocomplete="city">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zip" class="col-md-4 col-form-label text-md-end">{{ __('ZIP') }}</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" required autocomplete="zip" autofocus>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nid" class="col-md-4 col-form-label text-md-end">{{ __('NID of the Owner') }}</label>

                            <div class="col-md-6">
                                <input id="nid" type="file" class="form-control" name="nid">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="trade_licence" class="col-md-4 col-form-label text-md-end">{{ __('Trade Licence of the Company') }}</label>

                            <div class="col-md-6">
                                <input id="trade_licence" type="file" class="form-control" name="trade_licence">

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection