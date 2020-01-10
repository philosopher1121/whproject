@extends('index')

@section('title', '黑白工')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my 黑白工 content.</p>
@endsection
