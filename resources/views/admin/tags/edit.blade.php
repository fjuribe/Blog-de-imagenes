@extends('layouts.app')


@section('content')
  <div class="container">
  	  <div class="row">
  	  	    <div class="col-md-8 col-md-offset-2">
  	  	    	<div class="panel panel-default">
  	  	    		<div class="panel-heading">
  	  	    			Crear etiquetas
  	  	    		</div>
  	  

     	  	    	<div class="panel-body">
                      <form class="form-group" method="PUT" action="{{route('tags.update',$tag->id)}}" method="PUT" enctype="multipart/form-data">
                           {{ csrf_field() }}                           
                           
                           {{--   @include('vistas.form') --}}
                
                             <div class="form-group">
                             <label for="">Nombre de la etiqueta</label>
                             <input type="text" name="name" class="form-control" id="name" value="{{$tag->name}}">
                             </div>
                             
                             <div class="form-group">
                             <label for="">URL amigable</label>
                             <input type="text" name="slug" class="form-control" id="slug" value="{{$tag->slug}}">
                             </div>
                             
                             <div class="form-group">
                             <input type="submit" name="guardar" class="btn btn-primary" value="Confirmar">
                             </div>
                             
                             @section('script')
                             {{-- muestra las url amigables --}}
                             <script src="{{asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script> 
                             <script src="{{asset('vendor/stringToSlug/speakingurl.min.js')}}"></script> 
                             <script>
                             $(document).ready(function() {
                                 $("#name,#slug").stringToSlug({
                                        callback:function(text){
                                                 $("#slug").val(text);
                                        }
                                   });
                             });
                             
                             
                             </script>

@endsection
                           
                     </form>
  	  	    	   </div>
  
  	  	      	</div>	
  	  	    </div>
  	  </div>
  </div>
@endsection