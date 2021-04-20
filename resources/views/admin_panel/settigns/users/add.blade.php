@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains pmassege_positive content -->
    <div class="content-wrapper">
      <!-- Content Header (Pmassege_positive header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Add User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item active">Add User</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                   <form method="post" enctype="multipart/form-data" action="{{ url('/user-store')}}" autocomplete="off">
                        @csrf
                        @method('put')

                        <div class="card-header">
                            <h5 class="title">{{ __('Add User') }}</h5> <a href = "{{url('/users')}}" class="btn btn-outline-secondary">Back</a>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                            id="input-name" type="text" placeholder="{{ __('name') }}"
                                            value="" required="true" aria-required="true" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                            id="input-email" type="email" placeholder="{{ __('email') }}"
                                            value="" required="true" aria-required="true" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Password') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                            id="input-name" type="password" placeholder=""
                                            value=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Massege') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('massege') ? ' has-danger' : '' }}">
                                            <textarea name="massege">Ваш аккаунт создан, данные для входа:</textarea>
                                            <script>
                                               CKEDITOR.replace( 'massege' );
                                           </script>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Add User Profile') }}</button>
                            <div class="clearfix"></div>
                        </div>
                </div>
                </form>
             </div>
          </div>
    </div>
@endsection
