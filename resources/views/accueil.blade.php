@extends('layouts.template')

@section('title')
    Open Bar
@endsection

@section('content')
    @include('home.banner')

    @include('home.about')

    @include('home.menu')

    @include('home.events')
@endsection