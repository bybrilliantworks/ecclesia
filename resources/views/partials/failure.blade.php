@if (session('failure'))
   <div class="alert alert-danger alert-dismissible">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <strong> :( Oops!</strong>
         {{ session('failure') }}<br><br>
   </div>
@endif