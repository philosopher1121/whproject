@extends('index')

@section('title', '租屋')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my 租屋 content.</p>
@endsection
