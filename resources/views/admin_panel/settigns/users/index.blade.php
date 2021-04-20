@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Users <a href="{{ url('/user/add') }}" class="btn btn-outline-secondary">Add User</a></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
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
                      <th scope="col">Email</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                 </thead>
                 <tbody>
                    @if (count($users) === 0)
                        <tr><td>I don't have any records!</td></tr>
                    @else
                     @foreach ($users as $user)
                            <tr>                                    
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->first_name}} {{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{url('users/user/edit/'.$user->id)}}">Edit</a></td>
                                <td><a href="{{url('/users/user/delete/'.$user->id)}}">Delete</a></td>
                            </tr>
                     @endforeach                      
                    @endif 
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
