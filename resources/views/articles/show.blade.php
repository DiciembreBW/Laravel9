@extends('app')

@section('content')
   <article>
   <h2> {{ $article->title }}</h2>

    <div class="body"> {{ $article->body }}</div>
   </article>

   <h4><a href="{{ url('articles') }}"> back </a></h4>
@stop()