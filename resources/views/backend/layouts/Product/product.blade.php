@extends('backend.layouts.master')
@section('content')


@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--        {{ dd($settings) }}--}}
    <form method="POST" enctype="multipart/form-data" action="{{route('product_store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">productId</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="productId">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">productName</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="productName">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" name="category" id="category">
                <option value="">--Select--</option>
                @forelse ($categories as $category)
                <option value="{{ $category ? $category->id :''}}"> {{ $category ? $category->name :''}}</option>


                @empty
               <option> --no categories </option>
                @endforelse

            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Brand</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="Brand">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="text" class="form-control" name="price" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">rentingPrice</label>
            <input type="text" class="form-control" name="rentingPrice">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">purchasedAt</label>
            <input type="date" class="form-control" name="purchasedAt" value="">
        </div>

        <div>
            <label for="formFileLg" class="form-label">Image</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
=======
<form method="POST" action="route{{('submit')}} >
    @csrf
    <h2>    Add Products</h2>
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="ProductId" value="{{$product ? $products->ProductId :''}}">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="ProductName" value="{{$product ? $products->ProductName :''}}">
      </div>
    </div>
    <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Category" value="{{$product ? $products->Ctegory :''}}">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Brand" value="{{$product ? $products->Brand :''}}">
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Price" value="{{$product ? $products->Price :''}}">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="RentingPrice" value="{{$product ? $products->RentingPrice :''}}">
        </div>
        <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="PurchasedAt" value="{{$product ? $products->PurchasedAt :''}}">
            </div>
        </div>
      </div>

  </form>

@endsection
