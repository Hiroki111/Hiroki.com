@extends('layouts.master')


@section('title', 'Hiroki.com')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>Hiroki.com</h1>
    <p>This is used for practicing Laravel 5</p>
    <!-- access DB, get article objects, show them in a for loop -->

@endsection
