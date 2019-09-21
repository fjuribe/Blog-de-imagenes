@extends('layouts.app')


@section('content')
  <div class="container">
  	  <div class="row">
  	  	    <div class="col-md-8 col-md-offset-2">
  	  	    	<div class="panel panel-default">
  	  	    		<div class="panel-heading">
  	  	    			Lista de mis Entradas
  	  	    			 <a href="{{route('posts.create')}}" title=""
  	  	    			 class="btn btn-sm btn-primary pull-right">
  	  	    			 	Crear
  	  	    			 </a>
  	  	    		</div>
  	  

  	  	    	<div class="panel-body">
  	  	    		<table class="table table-striped table-hover">
  	  	    			<thead>
  	  	    				<tr>
  	  	    					<th width="10px">ID</th>
  	  	    					<th>Nombre</th>
  	  	    					<th colspan="3">&nbsp;</th>
  	  	    				</tr>
  	  	    			</thead>
  	  	    			<tbody>
  	  	    				 @foreach($posts as $post)

										<tr>
                  							<td>{{$post->id}}</td>
                  							<td>{{$post->name}}</td>
                  							<td width="10px">
                                                    <a href="{{route('posts.show',$post->id)}}" title="" class="btn btn-sm btn-default">Ver</a>
                  							</td>


                  							<td width="10px">
                                                    <a href="{{route('posts.edit',$post->id)}}" title="" class="btn btn-sm btn-default">Editar</a>
                  							</td>

                                  

                                  {{-- Eliminar --}}
                  							<td width="10px">
													<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
													      {{ method_field('delete') }}
													      {{ csrf_field() }}
													
													<button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
													</form>
                  							</td>
										</tr>

  	  	    				 @endforeach
  	  	    		   	</tbody>
  	  	    	    	</table>
  	  	    		{{$posts->render()}}
  	  	    	   </div>
  	  	      	</div>	
  	  	    </div>
  	  </div>
  </div>
@endsection
