@extends('layouts.app')


@section('content')
  <div class="container">
  	  <div class="row">
  	  	    <div class="col-md-8 col-md-offset-2">
  	  	    	<div class="panel panel-default">
  	  	    		<div class="panel-heading">
  	  	    			Crear Categoria
  	  	    		</div>


     	  	    	<div class="panel-body">
                         <form method="post" action="{{route('categories.store')}}">
                          {{ csrf_field() }}
                             @include('admin.categories.partials.form')

                         </form>
  	  	    	   </div>
  
  	  	      	</div>	
  	  	    </div>
  	  </div>
  </div>
@endsection
