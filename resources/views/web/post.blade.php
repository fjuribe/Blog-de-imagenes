@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		  <h1>{{$post->name}}</h1>

		{{--   @foreach($posts as $post) --}}
              <div class="panel panel-default"> 
                         <div class="panel-heading">
                          		Categoria
                              <a href="{{route('category',$post->category->slug)}}" title="">{{$post->category->name}}</a>
                         </div> 	
              </div>      


              <div class="panel-body">
                     @if($post->file)
                        <img src="{{$post->file}}" alt="" class="img-responsive">
                     @endif	
                     {{$post->excerpt}}

                   <hr>

                   {!! $post->body !!}

                   <hr>

                    @foreach($post->tags as $tag)  
                            <a href="{{route('category',$post->category->slug)}}" title="">
                                 {{$tag->name}}
                            </a>
                    @endforeach 
              </div>
		 {{--  @endforeach --}}
		 {{--  {{$posts->render()}} --}}
	</div>
</div>


@endsection

