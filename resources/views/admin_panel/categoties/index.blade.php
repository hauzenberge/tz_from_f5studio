@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Categories <a href="{{ url('/categories/add') }}" class="btn btn-outline-secondary">Add category</a></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <table class="table">
                 <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                 </thead>
                 <tbody>
                    @if (count($categories) === 0)
                        <tr><td>I don't have any records!</td></tr>
                    @else
                     @foreach ($categories as $category)
                            <tr>                                    
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                <td><a href="{{url('/categories/edit/'.$category->id)}}">Edit</a></td>
                                <td><a href="{{url('/categories/delete/'.$category->id)}}">Delete</a></td>
                            </tr>
                     @endforeach                      
                    @endif 
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
