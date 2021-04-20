@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Posts <a href="{{ url('/ads/add') }}" class="btn btn-outline-secondary">Add Post</a></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Posts</li>
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
                      <th scope="col">Title</th>
                      <th scope="col">Category</th>
                      <th scope="col">Author</th>
                      <th scope="col">Text</th>
                      <th scope="col">Created</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                 </thead>
                 <tbody>
                    @if (count($ads) === 0)
                        <tr><td>I don't have any records!</td></tr>
                    @else
                     @foreach ($ads as $ad)
                            <tr>                                    
                                <th scope="row">{{$ad->id}}</th>
                                <td>{{$ad->title}}</td>
                                <td>
                                  {{App\Categoty::find($ad->category_id)->name}}</td>
                                <td>
                                  {{App\User::find( $ad->author_id)->first_name}} {{App\User::find( $ad->author_id)->last_name}}
                                </td>
                                <td>{!! substr($ad->text, 0, 150) !!}</td>
                                
                                 <td> {{$ad->created_at}} </td>

                                <td><a href="{{url('/ads/edit/'.$ad->id)}}">Edit</a></td>
                                <td><a href="{{url('/ads/delete/'.$ad->id)}}">Delete</a></td>
                            </tr>
                     @endforeach                      
                    @endif 
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection   