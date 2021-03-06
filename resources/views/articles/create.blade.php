@extends('appMaster')

@section('head')
    <title>New Article</title>
@endsection

@section('content')
    
    <h1>New Article</h1>
    <hr/>    
    
    @include('partials._errorMsg')
    
    <form method="POST" action="{{ url('articles') }}">
    
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        @include('articles.partials._form')
        
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary form-control">
        </div>
        
    </form>
    
@endsection