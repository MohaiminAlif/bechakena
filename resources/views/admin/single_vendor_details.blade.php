@extends('layouts.app') @section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">




<div class="row container mb-5 offset-2">
    <div class="col-4">
        <img class="shadow border-lg" style="height: 200px; width:200px; border-radius:100%;" src="{{url(asset ('Image/Vendor_Documents/'.$vData->trade_licence))}}" alt="">
    </div>
    
    <div class="col-4">
    <table class="table table-borderless w-20 p-2">

    <tbody>

      <tr>
        <th scope="row">Name:</th>
        <td>{{$uData->name}}</td>

      </tr>
      <tr>
        <th scope="row">Company Name:</th>
        <td>{{$vData->name}}</td>

      </tr>
      <tr>
        <th scope="row">Phone:</th>
        <td>{{$vData->phone}}</td>

      </tr>
      <tr>
      <th scope="row">Address:</th>
        <td>{{$vData->address}}</td>
      </tr>
    </tbody>
  </table>
  </div>

</div>



<div class="row container" style="margin-top: 100px; margin-left:200px">

  <div class="col-4">
      <img class="shadow rounded" style="height: 200px; width: 300px;" src="{{url(asset ('Image/Vendor_Documents/'.$vData->nid))}}" alt="">
    </div>

  <div class="col-6">
      <img class="shadow rounded" style="height: 800px; width: 700px;" src="{{url(asset ('Image/Vendor_Documents/'.$vData->trade_licence))}}" alt="">
  </div>  

</div>

<div class="row mt-5">
  <div class="btn offset-4">
    <button class="btn btn-secondary " onclick="window.print();return false;">Print</button></div>

</div>

<div class="row mt-5">
    <button class="btn"><a href="{{ url('vendor_role_change/'.$vData->id) }}" class="btn btn-danger btn-sm">approve</a></button>

</div>





<script src="https://kit.fontawesome.com/ca76eb4afc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection