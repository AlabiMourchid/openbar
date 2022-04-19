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
                        <div class="col-lg-7 col-md-6">
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
                            <div class="row sponsors">
                                <div class="col-lg-3 item bg-light"><img src="{{ asset('images/sponsors/1.png') }}" alt=""></div>
                                <div class="col-lg-3 item bg-light"><img src="{{ asset('images/sponsors/2.png') }}" alt=""></div>
                                <div class="col-lg-3 item bg-light"><img src="{{ asset('images/sponsors/3.png') }}" alt=""></div>
                                <div class="col-lg-3 item bg-light"><img src="{{ asset('images/sponsors/4.png') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="offset-1 col-lg-4 col-md-5">
                            <form action="" method="post" id="ticketForm">
                              @csrf
                              <div class="reservation ">
                                <div class="row">
                                  <div class="col-12">
                                    <select name="nbr_ticket" id="nbr_ticket" class="form-control">
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
                                      <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrer votre nom">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                      <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Entrer votre prenom">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                      <input type="email" name="email" id="email" class="form-control" placeholder="Entrer votre email">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-12">
                                    <p>Vous allez être redirigé vers l’interface sécurisée de Paybox pour acheter votre ticket.</p>
                                    <button class="btn btn-voir-plus w-100" id ="btnAmount">Payer 2000 FCFA</button>
                                    <input type="hidden" name="amount" id="amount" value="2000">
                                  </div>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection

@section('moreJs')  
<script src="https://cdn.kkiapay.me/k.js"></script>
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

        $('#nbr_ticket').on('change',function(){
          console.log('jjfj');
          $nbr_ticket = $('#nbr_ticket').val();
          $('#amount').val(2000 * $nbr_ticket);
          $("#btnAmount").text('Payer ' +2000 * $nbr_ticket + ' FCFA');
        });

        $('button.btn').prop('disabled', 'disabled');   // disables button
        $('input.btn').prop('disabled', 'disabled');
        $('#ticketForm').validate({
            rules: {
                nom: {
                    required: true
                } ,
                prenom: {
                    required: true
                } ,
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                nom: "Le prenom est obligatoire",
                prenom: "Le nom est obligatoire",
                email: {
                    required: "L'email est obligatoire",
                    email: "Ce n'est pas un mail"
                },
            }
        });

        $('#ticketForm input').on('keyup blur', function () { // fires on every keyup & blur
            if ($('#ticketForm').valid()) {                   // checks form for validity
                $('button.btn').prop('disabled', false);        // enables button
                $('input.btn').prop('disabled', false);


            } else {
                $('button.btn').prop('disabled', 'disabled');   // disables button
                $('input.btn').prop('disabled', 'disabled');
            }
        });
        
        $('#btnAmount').on('click',function(e){

            e.preventDefault();

            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

            var nom = $('#nom').val();
            var prenom = $('#prenom').val();
            var email = $('#email').val();
            var nbr_ticket = $('#nbr_ticket').val();

            var amount = $('#amount').val();

            var total_amount = parseInt(amount);

            var route = "http://localhost:8000/ticket/validation";

            widget_Key = "{{env('KKIAPAY_PUBLIC_KEY')}}";

            var formData = {
                'nom' : $("#nom").val(),
                'prenom' : $("#prenom").val(),
                'email' : $("#email").val(),
                'nbr_ticket' : $("#nbr_ticket").val(),
            };


            var type = "POST";

            $.ajax({
                type: type,
                url:'/ticket/save',
                data: formData,
                dataType: 'json',
                success: function(value){
                    openKkiapayWidget({
                        amount: total_amount,
                        email: email,
                        phone: "97000000",
                        firstname: nom,
                        lastname: prenom,
                        callback: route,
                        data:"",
                        theme:"#FFB800",
                        sandbox:"true",
                        position:"center",
                        key:widget_Key
                    });
                },
                error: function(data){
                    alert('Error');
                    console.log(data);
                }
            });
        });

      });
    </script>
@endsection
