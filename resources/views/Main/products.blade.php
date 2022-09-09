@extends('public_master') @section('public_title') Product Page @endsection @section('public_content')

<div class="row container">

    <div class="col-2" style="margin-top:50px;">

        <form action="{{ route('filter_by_amount') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label >Filter by Price</label><br>
            <input type="radio" name="amount" onChange='submit();' value='1'>
            <label >0 - 2,000</label><br>
            <input type="radio" name="amount" onChange='submit();' value="2">
            <label >2,001 - 10,000</label><br>
            <input type="radio"name="amount" onChange='submit();' value="3">
            <label > 10,001 - 20,000</label><br>
            <input type="radio"name="amount" onChange='submit();' value="4">
            <label > 20,001 - 50,000</label><br><br>
        </form>

    </div>

    <div class="col-10 container">
        <section class="row mb-5 mx-5 px-0">

            @forelse($datas as $data)
            <div class="mt-5 rounded" style="width: 300px;">
                <div class="card card-product">
                    <div class="card-body">

                        <div class="text-center position-relative ">
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">{{$data->category}}</span>
                            </div>
                            <a href="{{ url('single_product/'.$data->id)}}"> <img  style="width: 150px; height: 200px;" src="{{url(asset ('Image/'.$data->img))}}" alt="{{$data->name}}" class="mb-3 img-fluid"></a>


                        </div>
                        <div class="text-small mb-1"><a href="{{ url('products/'.$data->category)}}" class="text-decoration-none text-muted"><small>{{$data->category}}</small></a>
                        </div>
                        <h2 class="fs-6"><a href="{{ url('single_product/'.$data->id)}}" class="text-inherit text-decoration-none product-name">{{$data->name}}</a></h2>
                        <div>

                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small> <span class="text-muted small"></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div><span class="text-dark">Taka: {{$data->price}}</span>
                                <!-- <span class="text-decoration-line-through text-muted">Taka: {{$data->price}}</span>--><!-- {for discount use only} -->                                
                            </div>
                            <div>
                                <a href="#!" class="btn btn-sm add-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Add</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            @empty
            <tr>
                <td>
                    <h4 class="mt-2">Nothing is here!</h4>
                </td>
            </tr>


            @endforelse


        </section>
    </div>
</div>
@endsection