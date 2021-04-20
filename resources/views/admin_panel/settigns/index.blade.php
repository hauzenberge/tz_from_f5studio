@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Email Logs </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Email Logs</li>
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
                      <th scope="col">Sender</th>
                      <th scope="col">Recipient</th>
                      <th scope="col">Massege</th>
                      <th scope="col">Date/Time</th>
                    </tr>
                 </thead>
                 <tbody>
                    @if (count($logs) === 0)
                        <tr><td>I don't have any records!</td></tr>
                    @else
                     @foreach ($logs as $log)
                            <tr>                                    
                                <th scope="row">{{$log->id}}</th>
                                <td>{{$log->sender}}</td>
                                <td>{{$log->recipient}}</td>
                                <td>{!! $log->massege !!}</td>
                                <td>{{$log->created_at}}</td>
                            </tr>
                     @endforeach                      
                    @endif 
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
