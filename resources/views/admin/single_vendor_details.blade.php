@extends('admin.master') @section('admin_title') Single Vendor @endsection 

@section('admin_content')

<div class="container">
<div class="row mb-5 mt-5 justify-content-center">
    <div class="text-center">
        <img class="shadow border-lg" style="height: 200px; width:200px; border-radius:100%;" src="{{url(asset ('Image/Vendor_Documents/'.$vData->trade_licence))}}" alt="">
    </div>
    
    <div class="col-4 mt-5">
    <table class="table table-borderless w-10 p-2">

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

  <div class="row mb-5 justify-content-center">
      <img class="shadow rounded" style="height: 200px; width: 300px;" src="{{url(asset ('Image/Vendor_Documents/'.$vData->nid))}}" alt="">
    </div>

  <div class="row justify-content-center">
      <img class="shadow rounded" style="height: 800px; width: 700px;" src="{{url(asset ('Image/Vendor_Documents/'.$vData->trade_licence))}}" alt="">
  </div>  

</div>

<div class="row text-center mt-2">
<div class="col-7">

    <button class="btn addButton" onclick="window.print();return false;">Print</button>


  </div>

<div class="col-2">
    <a href="{{ url('delete_vendor/'.$vData->id) }}"><button class="deleteButton">Delete Vendor</button></a>
</div>

</div>

@endsection