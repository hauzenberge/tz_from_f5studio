@extends('layouts.siedbar')

@section('content')
<!-- Content Wrapper. Contains pmassege_positive content -->
    <div class="content-wrapper">
      <!-- Content Header (Pmassege_positive header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Edit Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/ads')}}">ADS</a></li>
                <li class="breadcrumb-item active">Edit Post</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    
      <!-- /.content-header -->
      <div class="container">
          <form method="post" enctype="multipart/form-data" action="{{ url('ads/ad-store')}}" autocomplete="on">
                 @csrf
                 @method('put')
                 <h5 class="title">{{ __('Edit ADS') }}</h5> <a href = "{{url('/ads')}}" class="btn btn-outline-secondary">Back</a>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('title') }}"
                                            value="" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 @if(Auth::user()->role_id == 1)
                    <div class="row">
                          <label class="col-sm-2 col-form-label">{{ __('Published') }}</label>
                          <div class="col-sm-7">
                             <div class="form-group{{ $errors->has('categories') ? ' has-danger' : '' }}">
                                <select class="form-control" name="publishet"> 
                                     <option value="no published">no published</option>
                                     <option value="published"> published</option>   
                                </select>       
                             </div>
                         </div>
                     </div>
                 @endif                 

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="text" placeholder="{{ __('price') }}"
                                            value="" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Categories') }}</label>
                      <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('categories') ? ' has-danger' : '' }}">
                             @if(count(App\Categoty::all()) > 0)
                                 <select class="form-control" name="category_id"> 

                                     @foreach (App\Categoty::all() as $role)
                                         <option value="{{ $role->id }}">{{ $role->name }}</option>
                                     @endforeach
                                 </select>

                                 @else
                                     I have'nt Categories
                                 @endif                                  
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Post') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('post') ? ' has-danger' : '' }}">
                             <textarea name="post"></textarea>
                             <script>
                                 CKEDITOR.replace( 'post' );
                             </script>
                         </div>
                     </div>
                 </div>
                     
                 <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Update AD') }}</button>
                     <div class="clearfix"></div>              
         </form>
     </div>
    </div>
@endsection