@extends('layouts.template')

@section('title')
    Open Bar - Menu
@endsection

@section('content')
    <div class="container-fluid menu-banner menu-banner-bg">
        <div class="container justify-content-center d-flex">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-banner-text text-center">
                        <div class="menu-banner-text-content">
                            <h2>Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid menu-content content-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/limonade.jpg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Limonade</h4>
                            <span>500F</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/119032_w1024h1024c1cx1060cy707.jpg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Super Punch Multi Fruits</h4>
                            <span>1000F</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/sweet-mango.jpg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Sweet Mango</h4>
                            <span>1500F</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/cocktail.jpeg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Cocktails</h4>
                            <span>2000F</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/limonade.jpg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Limonade</h4>
                            <span>500F</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/119032_w1024h1024c1cx1060cy707.jpg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Super Punch Multi Fruits</h4>
                            <span>1000F</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/sweet-mango.jpg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Sweet Mango</h4>
                            <span>1500F</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="menu">
                        <div class="menu-img">
                            {{-- <img class="card-img-top" src="{{ asset('images/Recettes-de-cocktail.jpg') }}" alt="Card image"> --}}
                            <img class="card-img-top" src="{{ asset('images/cocktail.jpeg') }}" alt="Card image">
                        </div>
                        <div class="menu-info">
                            <h4>Cocktails</h4>
                            <span>2000F</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection