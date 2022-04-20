@extends('backend.layouts.master')
@section('content')

{{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    {{--        {{ dd($settings) }}--}}
    <form method="post" enctype="multipart/form-data" action="{{route('des_store')}}">
        @csrf

        {{-- <div class="form-group">
            <label for="exampleInputEmail1">Product_id</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="product_id">
        </div> --}}


        <div class="form-group">
            <label for="exampleInputEmail1">productName</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="productName">
        </div>
       <div class="form-group">
            <label for="exampleInputPassword1">Descriptions</label>
            <input type="text" class="form-control" name="descriptions">
        </div>


        <button type="submit" class="btn btn-primary">create</button>
    </form>
@endsection
