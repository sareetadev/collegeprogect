@extends('backend.layouts.master')
@section('content')

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
