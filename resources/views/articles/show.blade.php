@extends('appMaster')

@section('head')
    <title>Article</title>
@endsection

@section('content')
    
    <h1>{{ $article->title }}</h1>
    <hr/>
    
    <p>{{ $article->body }}</p>
    
@endsection


