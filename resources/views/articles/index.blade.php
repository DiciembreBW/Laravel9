@extends('app')

@section('content')
    <h1>Articles</h1>

<hr>
    @foreach($articles as $articles)

           <article>

                <a href="{{ url('articles',$articles->id) }}"> <h3>{{ $articles->title  }}</h3> </a>
                <div class="body">
                    {{ $articles->body }}
                </div>
           </article>

    @endforeach()
@stop