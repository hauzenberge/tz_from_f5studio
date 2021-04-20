@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains pmassege_positive content -->
    <div class="content-wrapper">
      <!-- Content Header (Pmassege_positive header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">User Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                 
            </div>           
            <div class="col-md-12">    
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{ __('User Profile') }}</h5>                         
                    </div>
                    <div class="card-body">
                         <form method="post" enctype="multipart/form-data" action="{{ url('users/user-update/'.$user->id)}}" autocomplete="off">
                            @csrf
                            @method('put')                        
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('First Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                                         <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="first_name"
                                                    id="input-name" type="text" placeholder="{{ __('first_name') }}"
                                                    value="{{ $user->first_name }}" required="true" aria-required="true" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Last Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                         <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name"
                                                    id="input-name" type="text" placeholder="{{ __('last_name') }}"
                                                    value="{{ $user->last_name }}" required="true" aria-required="true" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                         <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                                                    id="input-phone" type="text" placeholder="{{ __('phone') }}"
                                                    value="{{ $user->phone }}" required="true" aria-required="true" />
                                    </div>
                                </div>
                            </div>

                            @if(Auth::user()->role_id == 1)
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">
                                        {{ __('Role') }}
                                    </label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('region') ? ' has-danger' : '' }}">
                                                <select class="form-control" name="role_id"> 
                                                    @foreach (App\Role::where('id', '=', $user->role_id)->get() as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endforeach

                                                    @foreach (App\Role::where('id', '!=', $user->role_id)->get() as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            @endif                            

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                                    id="input-email" type="email" placeholder="{{ __('email') }}"
                                                    value="{{ $user->email }}" required="true" aria-required="true" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                         <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                                    id="input-name" type="password" placeholder=""
                                                    value=""/>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Update Profile') }}</button>
                                    <div class="clearfix"></div>
                            </form>
                    </div>
                </div>                
                   
             </div>
          </div>
    </div>
@endsection
