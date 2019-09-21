         <div class="form-group">
            <label for="">Nombre de la etiqueta</label>
            <input type="text" name="name" class="form-control" id="name">
         </div>

         <div class="form-group">
         <label for="">URL amigable</label>
            <input type="text" name="slug" class="form-control" id="slug">
         </div>

         <div class="form-group">
            <input type="submit" name="guardar" class="btn btn-primary" >
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