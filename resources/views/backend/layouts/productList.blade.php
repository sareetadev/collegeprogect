<!------ Include the above in your HEAD tag ---------->
@extends('backend.layouts.master')
@section('content')
<a href="{{route('create')}}" class="btn btn-primary">Crate New</a>
<div class="container">
	<div class="d-flex justify-content-center h-60">

            <table class="table">

                <thead class="thead-dark">
                    <tr>
                      <th scope="col">ProductId</th>
                      <th scope="col">ProductName</th>
                      <th scope="col">Category</th>
                      <th scope="col">Brand</th>
                      <th scope="col">price</th>
                      <th scope="col">rentingPrice</th>
                      <th scope="col">purchasedAt</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>

                <tbody>
                    @if (isset($products))
                    @foreach ($products as $product )
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$product->ProductName ?? ''}}</td>
                        <td>{{$product->Category ?? ''}}</td>
                        <td>{{$product->Brand ?? ''}}</td>
                        <td>{{$product->Price ?? ''}}</td>
                        <td>{{$product->RentingPrice ?? ''}}</td>
                        <td>{{$product->PurchasedAt ?? ''}}</td>

                       <td>
                           {{-- <a href="{{route('edit')}}">Edit</a>
                           <a href="{{route('delete')}}">Delete</a> --}}

                       </td>



                    @endforeach

                    @endif

                </tbody>
              </table>


		</div>
	</div>
</div>
@endsection
