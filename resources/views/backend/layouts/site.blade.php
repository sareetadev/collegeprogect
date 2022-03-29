@extends('backend.layouts.master')
@section('content')
<form method="POST" enctype="multipart/form-data" action="route('update.setting')">
@csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Systen Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
          <div class="form-group">
      <label for="exampleInputPassword1">Adress</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Systen Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
            <div class="form-group">
        <label for="exampleInputPassword1">Adress</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>
@endsection
