@extends('backend.layouts.master')
@section('content')

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
