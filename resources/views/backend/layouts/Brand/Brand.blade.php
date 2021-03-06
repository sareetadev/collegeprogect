@extends('backend.layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <center>
                    <h2> Brand Details</h2>
                </center>
            </h6>
        </div>
        <br>
        <a href="{{route('')}}" style="position: absolute; right: 0;" class="btn btn-dark">+Add New
            Item</a>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th scope="col">BrandId</th>
                            <th scope="col">name</th>
                             <th scope="col">Logo</th>
                             <th scope="col">description</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($categories as $category )
                    <tr>
                        <th> {{ $loop->iteration ?? null}}</th>
                        <td> {{ $category->name ?? null }}</td>
                        <td>
                             <i class="{{ $category->icon ?? '' }}"></i>
                        </td>
                       <td> {{ $category->description ?? null}} </td>
                        <td>
                            <a href="{{ route('', $category->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route(', $category->id) }}" class="btn btn-primary">Delete</a>
                        </td>
                    @empty
                    <tr>
                        <td colspan="8"> Nothing Found!</td>
                    </tr>
                    @endforelse



                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
