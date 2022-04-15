@extends('layouts.template')

@section('title')
    Open Bar - Evenements Détails
@endsection

@section('content')
    <div class="banner-details">
        <div class="banner-details-img">
            <img src="{{ asset('images/event3.jpg') }}" alt="">
        </div>
    </div>
    <div class="container banner-grid">
        <div class="banner-event-grid">
            <div class="banner-event-grid-img">
              <img src="{{ asset('images/event3.jpg') }}" alt="">
            </div>
            <div class="content-event-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1>Holly Chill Resurection</h1>
                            <div class="date">
                                <p><i class="fa fa-ticket"> 2000 <sup>FCFA</sup></i></p>
                                <p><i class="fa fa-clock-o"> 16/04/2022 à 13h</i></p>
                                <p><i class="fa fa-location-arrow"> Mariella Bora Bora</i> </p>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been 
                            the industry's standard dummy text ever since the 1500s.when an unknown printer took a galley of type and scrambled 
                            it to make a type specimen book. It has survived not only five centuries, 
                            but also the leap into electronic typesetting.
                            Lorem Ipsum is simply dummy text of the printing 
                            and typesetting industry. Lorem Ipsum has been 
                            the industry's standard dummy text ever since the 1500s.when an unknown printer took a galley of type and scrambled 
                            it to make a type specimen book. It has survived not only five centuries, 
                            but also the leap into electronic typesetting.
                            </p>
                            <br>
                            <h3>DJ</h3>
                            <div class="event-dj">
                                <ul>
                                    <li>Famouz DJ</li>
                                    <li>Famouz DJ</li>
                                    <li>Famouz DJ</li>
                                </ul>
                            </div>
                            <br>
                            <h3>Sponsors/Partenaires</h3>
                            <div class="col-12">
                              <div class="owl-carousel owl-theme owlsponsors">
                                <div class="item"><img src="{{ asset('images/sponsors/1.png') }}" alt=""></div>
                                <div class="item"><img src="{{ asset('images/sponsors/2.png') }}" alt=""></div>
                                <div class="item"><img src="{{ asset('images/sponsors/3.png') }}" alt=""></div>
                                <div class="item"><img src="{{ asset('images/sponsors/4.png') }}" alt=""></div>
                              </div>
                              {{-- <div class="d-flex justify-content-center">
                                <button class="btn custom-trigger-left activites-web owlactivitesBtnLeft"><img src="{{ asset('images/chevron-left.svg')}}" alt="prev button"></button>
                                <button class="btn custom-trigger-right activites-web owlactivitesBtnRight"><img src="{{ asset('images/chevron-right.svg')}}" alt="next button"></button>
                              </div> --}}
                            </div>
                        </div>
                        <div class="offset-1 col-lg-4">
                            <div class="reservation">
                                <div class="row">
                                  <div class="col-12">
                                    <select name="nbr-ticket" id="nbr-ticket" class="form-control">
                                      <option value="" disabled>--Choisir un nombre de ticket--</option>
                                      <option value="1" selected>1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                    </select>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                      <input type="text" name="nom" class="form-control" placeholder="Entrer votre nom">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                      <input type="text" name="prenom" class="form-control" placeholder="Entrer votre prenom">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                      <input type="email" name="email" class="form-control" placeholder="Entrer votre email">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-12">
                                    <p>Vous allez être redirigé vers l’interface sécurisée de Paybox pour acheter votre ticket.</p>
                                    <button class="btn btn-voir-plus w-100" id ="btnAmount">Payer 2000 <sup>FCFA</sup></button>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection

@section('moreJs')  
    <script>
      $(document).ready(function() {

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        });

        $('.owlactivitesBtnLeft').click(function() {
          $(".owl-carousel").trigger('next.owl.carousel');
        });

        $('.owlactivitesBtnRight').click(function() {
          $(".owl-carousel").trigger('prev.owl.carousel');
        });

      });
    </script>
@endsection
