

@extends ('layout.main')

@section('content')

<div class="well">
    <div class="row">


     <div class="col-md-4 col-md-offset-4">

         {{ Form::open(array('url'=>'/login','method'=>'post'))}}

         <div class="form-group">

         {{ Form::label('username','Username') }}
         {{ Form::text('username',null,array('class'=>'form-control')) }}

             @if ($errors->has('username'))

{{ $errors->first('username') }}

             @endif


     </div>






     <div class="form-group">
         {{ Form::label('password','Password') }}

         {{ Form::password('password',array('class'=>'form-control')) }}

         @if ($errors->has('password'))

{{ $errors->first('password') }}

         @endif

     </div>

         <div class="form-group">
             {{ Form::label('','Remember me') }}

             {{ Form::checkbox('remember') }}


         </div>


         {{ Form::submit('Log In',array('class'=>'btn btn-primary') ) }}

         {{ Form::submit('New',array('class'=>'btn btn-inverse') ) }}

     </div>
     {{ Form::close ()}}



 </div>
<nav class="navbar-right"> <p class="text-info"> Powered By:JohnNelson Solutions  &copy {{ date('Y')}}</p>   </nav>
</div>
@stop