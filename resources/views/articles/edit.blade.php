
@extends('appMaster')

@section('head')
    <title>Edit Article</title>
@endsection

@section('content')
    
    <h1>Edit: <b>{{ $article->title }}</b></h1>
    <hr/>
    
    @include('partials._errorMsg')
    
    <form method="POST" action="{{ action('ArticlesController@update', $article->id) }}">
    
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        @include('articles.partials._form')
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" value="Edit">
        </div>
    
    </form>
    
@endsection