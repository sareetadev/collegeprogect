@extends('backend.layouts.master')
@section('content')

<form method="POST" action="route{{('cat_submit')}} >
    @csrf
    <h2>    Add Category</h2>
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="P_Id" value="{{$cats ? $cat->P_Id :''}}">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Name" value="{{$cats ? $cat->Name :''}}">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Description" value="{{$cats ? $cat->Description :''}}">
      </div>
    </div>


  </form>
@endsection
