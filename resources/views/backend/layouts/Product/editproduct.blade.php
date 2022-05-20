@extends('backend.layouts.master')
@section('content')
{{-- {{ dd($errors)}} --}}
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
               {{-- {{ dd($product->id) }} --}}
             {{-- {{dd $product ?  : ''}} --}}
    <form method="post" enctype="multipart/form-data" action="{{route('product_update', $product->id)}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">productId</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="productId"
                   value="{{ $product ?$product->Id : 's'}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">productName</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="productName"  value="{{$product ? $product->ProductName : ''}}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
          <select class="form-control" name="category" id="category">

                <option value="">--Select--</option>
                @forelse($categories as $category)
                    <option
                        value="{{ $category ? $category->id :'' }}" {{ ($category &&  $category->id ==$product->category_id) ? 'selected' :'' }}> {{ $category ? $category->name :'' }} </option>
                @empty
                    <option>--NO Categoris</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Brand</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="Brand"
                   value="{{ $product ? $product->Brand : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="text" class="form-control" name="price" value="{{ $product ? $product->Price : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">rentingPrice</label>
            <input type="text" class="form-control" name="rentingPrice" value="{{ $product ? $product->rentingPrice : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">purchasedAt</label>
            <input type="date" class="form-control" name="purchasedAt" value="{{ $product ? $product->purchasedAt : ''}}">
        </div>
        <div>
            <label for="formFileLg" class="form-label"> image</label>
            <img src="{{ $product? $product->image: ''}}" height="100px" width="100px" >
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">

        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection

