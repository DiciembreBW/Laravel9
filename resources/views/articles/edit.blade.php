@extends('app')

@section('content')

      <h1>Update Article</h1>
      <hr>
         {!! Form::open(['url'=>'articles']) !!}

        <div class="form-group">
                    {!! Form::label('title','title :') !!}
                    {!! Form::text('title',$article->title,['class'=>'form-control']) !!}
        </div>

         <div class="form-group">
                     {!! Form::label('body','body :') !!}
                     {!! Form::textarea('body',$article->body,['class'=>'form-control']) !!}
         </div>

         <div class="form-control">
                     {!! Form::submit('update now',['class'=>'btn btn-primary form-control']) !!}
         </div>

         {!! Form::close() !!}
         <hr>
         <a href="{{ url('articles/')  }}"> back</a>

@stop()