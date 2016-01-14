@extends('appMaster')

@section('head')
    <title>New Article</title>
@endsection

@section('content')
    
    <h1>New Article</h1>
    <hr/>    
    
    <form method="POST" action="{{ url('articles') }}">
    
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group">
            <label for="name">Title:</label>
            <input class="form-control" type="text" name="title" id="title" default="null">
        </div>
        
        <div class="form-group">
            <label for="body">Body:</label>
            <input class="form-control" type="textarea" name="body" id="body" default="null">
        </div>
        
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary form-control">
        </div>
        
    </form>
    
@endsection