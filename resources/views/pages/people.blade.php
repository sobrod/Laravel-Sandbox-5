
@extends('appMaster')

@section('head')
    <title>People</title>
@endsection

@section('content')
    <h1>People I Like</h1>
        
    <ul>
        @foreach ($people as $p)
            <li>{{ $p }}</li>
        @endforeach
    </ul>
@endsection