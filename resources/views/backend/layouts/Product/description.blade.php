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
        <th scope="col">id</th>
        <th scope="col">Prduct_id</th>
        <th scope="col">ProductName</th>
        <th scope="col">Decriptions</th>




<h2>HTML Table</h2>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">PrductId</th>
        <th scope="col">Decription</th>


      </tr>
    </thead>
    <tbody>



            @if ($descriptions)
            @foreach ($descriptions as $description )
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$description->product_id ?? ''}}</td>
                <td>{{$description->productName ?? ''}}</td>
                <td>{{$description->descriptions ?? ''}}</td>

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

      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
         </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
          </tr>

    </tbody>
  </table>

@endsection
