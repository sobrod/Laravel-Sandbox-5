@extends('appMaster')

@section('head')
    <title>Articles</title>
@endsection

@section('content')
    
    <h1>Articles</h1>
    <hr/>
    
    @foreach($articles as $article)
        <article>
            <!--The good old fashion injection method-->
            <!--<h1><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h1>-->
            <!--Using the action() helper method-->
            <!--<h1><a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a></h1>-->
            <!--Using the url() function-->
            <h1><a href="{{ url('/articles', $article->id) }}">{{ $article->title }} : {{ $article->published_at->format('m-d-Y H:i') }}</a></h1>
            <div class="body">
                {{ $article->body }}
            </div>
        </article>
    @endforeach
    
@endsection

