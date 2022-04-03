@extends('backend.layouts.master')
@section('content')

<h2>Descriptions</h2>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">PrductId</th>
        <th scope="col">productName</th>
        <th scope="col">Decription</th>

        <th scope="col">image</th>


      </tr>
    </thead>
    <tbody>


            @if ($descriptions)
            @foreach ($descriptions as $description )
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$product->productId ?? ''}}</td>
                <td>{{$product->ProductName ?? ''}}</td>
                <td>{{$product->descriptions ?? ''}}</td>
                     <img src="{{ $product->image??'' }}" height="100px" width="100">
                </td>
                <td>{{$description->Action ?? ''}}</td>

                <td>
                    <a href="{{ route('product_edit', $product->id) }}" class="btn btn-primary">Edit</a>
                  <a href="{{ route('product_delete', $product->id)}}"class="btn btn-primary">Delete</a>

                </td>


            @endforeach

            @endif


    </tbody>
  </table>
@endsection
