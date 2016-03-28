@extends ('layout.main')

@section('content')

<div class="well">
    <div class="row">


        <div class="col-md-4 col-md-offset-4">

            {{ Form::open(array('url'=>'/todo','method'=>'post'))}}

            <div class="form-group">

                {{ Form::label('todo',' To DO Subject') }}
                {{ Form::text('subject',null,array('class'=>'form-control'))}}



            </div>

            <div class="form-group">

                {{ Form::label('todo','ToDo Description') }}
                {{ Form::textarea('description',null,array('class'=>'form-control')) }}

             </div>
            {{ Form::submit('Create',array('class'=>'btn btn-primary') ) }}





            </div>




        </div>



    {{ Form::close ()}}



    </div>


    <nav class="navbar-right"> <p class="text-info"> Powered By:JohnNelson Solutions  &copy {{ date('Y')}}</p>   </nav>
</div>
@stop