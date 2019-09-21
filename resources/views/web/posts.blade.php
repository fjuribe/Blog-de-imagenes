@extends('layouts.app')

@section('content')

<div>
	<div class="col-md-8 col-md-offset-2">
		  <h1>Lista de articulos</h1>

		  @foreach($posts as $post)
              <div class="panel panel-default"> 
                         <div class="panel-heading">
                          		{{$post->name}}
                         </div> 	
              </div>      


              <div class="panel-body">
                     @if($post->file)
                        <img src="{{$post->file}}" alt="" class="img-responsive">
                     @endif	
                     {{$post->excerpt}}

                     <a href="{{route('post',$post->slug)}}" title="" class="pluu-right">leer mas</a>
              </div>
		  @endforeach
		  {{$posts->render()}}
	</div>
</div>


@endsection

