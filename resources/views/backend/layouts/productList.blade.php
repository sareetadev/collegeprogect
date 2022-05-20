<!------ Include the above in your HEAD tag ---------->
@extends('backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('product_create')}}" style="position: absolute; right: 0;" class="btn btn-dark">+Add New
            Item</a>

        <h6 class="m-0 font-weight-bold text-primary">
            <center>
                <h2>Products Details</h2>
            </center>
        </h6>
    </div>

     <div class="card-body">
         <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead class="thead-dark">
                    <tr>
                      <th scope="col">ProductId</th>
                      <th scope="col">ProductName</th>
                      <th scope="col">Category</th>
                      <th scope="col">Brand</th>
                      <th scope="col">Price</th>
                      <th scope="col">rentingPrice</th>
                      <th scope="col">purchasedAt</th>
                      <th scope="col">image</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>

                <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$product->ProductName ?? ''}}</td>
                        <td>{{$product->category ?? ''}}</td>
                        <td>{{$product->Brand ?? ''}}</td>
                        <td>{{$product->Price ?? ''}}</td>
                        <td>{{$product->rentingPrice ?? ''}}</td>
                        <td>{{$product->PurchasedAt ?? ''}}</td>
                        <td>
                            <img src="{{ $product->image??'' }}" height="100px" width="100">
                        </td>
                        <td>{{$product->Action ?? ''}}</td>

                        <td>
                            <a href="{{ route('product_edit', $product->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('product_delete', $product->id)}}"class="btn btn-primary">Delete</a>

                        </td>


                    @endforeach



                </tbody>
              </table>
         </div>
        </div>

		</div>
	</div>
</div>
@endsection
