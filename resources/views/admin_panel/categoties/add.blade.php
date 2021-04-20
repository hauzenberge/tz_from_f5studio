@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains pmassege_positive content -->
    <div class="content-wrapper">
      <!-- Content Header (Pmassege_positive header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Add Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/admin/home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/admin/posts/categories/')}}">Post Categories</a></li>
                <li class="breadcrumb-item active">Add Category</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                   <form method="post" enctype="multipart/form-data" action="{{ url('/admin/posts/categories/post-category-store/')}}" autocomplete="off">
                        @csrf
                        @method('put')

                        <div class="card-header">
                            <h5 class="title">{{ __('Add Category') }}</h5> <a href = "{{url('/admin/posts/categories/')}}" class="btn btn-outline-secondary">Back</a>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"
                                            id="input-title" type="text" placeholder="{{ __('title') }}"
                                            value="" required="true" aria-required="true" />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Add Category') }}</button>
                            <div class="clearfix"></div>
                        </div>
                </div>
                </form>
             </div>
          </div>
    </div>
@endsection
