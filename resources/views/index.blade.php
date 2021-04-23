@extends('layouts.app')

@section('content')
 
<div class="row">
    @foreach($posts as $post)
    <div class="col-12 col-md-4">       
        
            <div class="card">
                <div class="card-header">                  
                  @if($post->image != null)
                     <img src="{{asset($post->image)}}" width="300px">
                  @endif
                  
                   <h3>{{ $post->title }}</h3>
                   <div class="tags btn-btmargin">
                          <strong>Price:</strong> {{$post->price }} $
                            <br>
                            <strong>Categories:</strong> 
                            @foreach ($categories as $category)
                                 @if ($post->category_id == $category->id)        
                                     <a href="#">{{$category->name}} </a>
                                 @endif
                            @endforeach
                            <br>
                            <strong>Published:</strong> {{ date('M j, Y', strtotime($post->created_at)) }}
                            <br>                  
                    </div>
                </div>

                <div class="card-body">
                    <p>{!! $post->text !!}</p>
                </div>
            </div>
        
    </div>
    


    @endforeach
    <div class="col-12">
        
    </div>
</div>
@endsection