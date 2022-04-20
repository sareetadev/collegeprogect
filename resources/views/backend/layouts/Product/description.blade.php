@extends('backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <center>
                <h2>Description Details</h2>
            </center>
        </h6>
    </div>
    <br>
    <a href="{{route('des_create')}}" style="position: absolute; right: 0;" class="btn btn-dark">+Add New
        Item</a>
    <br><div class="container">
	<div class="d-flex justify-content-center h-60">

    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Prduct_id</th>
        <th scope="col">ProductName</th>
        <th scope="col">Decriptions</th>



      </tr>
    </thead>
    <tbody>


            @if ($descriptions)
            @foreach ($descriptions as $description )
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$product->product_id ?? ''}}</td>
                <td>{{$product->productName ?? ''}}</td>
                <td>{{$product->descriptions ?? ''}}</td>

                <td>{{$description->Action ?? ''}}</td>

                <td>
                    <a href="{{ ''}}" class="btn btn-primary">Edit</a>
                  <a href="{{ ''}}"class="btn btn-primary">Delete</a>

                </td>


            @endforeach

            @endif


    </tbody>
  </table>
    </div>
@endsection
