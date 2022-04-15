@extends('layouts.template')

@section('title')
    Open Bar
@endsection

@section('content')
    @include('home.banner')

    @include('home.about')

    @include('home.menu')

    @include('home.events')

    @include('home.contact')
@endsection

@section('moreJs')
    <script>
        $(window).scroll(function () {
           
           if($(this).scrollTop() > 200){
               $('.navbar').addClass('fixed-top shadow animated fadeInDown');
           }
           else{
                $('.navbar').removeClass('fixed-top shadow animated fadeInDown');
           }
       });
    </script>
@endsection