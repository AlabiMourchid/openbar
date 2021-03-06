@extends('layouts.template')

@section('title')
    Open Bar - Evenements
@endsection

@section('content')
    <div class="container-fluid event-banner event-banner-bg">
        <div class="container justify-content-center d-flex">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-banner-text text-center">
                        <div class="event-banner-text-content">
                            <h2>Evènements</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid menu-content content-bg">
        <div class="container event-content-card py-3">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <a href="{{ route('evenement-details') }}">
                        <div class="card ">
                            <div class="card-img-top">
                                <img src="{{ asset('images/event3.jpg') }}" class="w-100" alt="">
                            </div>
                            <div class="card-body py-5">
                                <div class="row date ">
                                   <div class="col-6">
                                       <p class="text-center"><i class="fa fa-clock-o"> 16/04/2022 à 13h</i></p>
                                   </div>
                                   <div class="col-6">
                                       <p class="text-center"><i class="fa fa-ticket"> 2000 <sup>FCFA</sup></i></p>
                                   </div>
                                </div>
                                <h2 class="text-center">Holly Chill Resurection</h2>
                                <p class="p-3"><i class="fa fa-location-arrow"> Mariella Bora Bora</i> </p>
                                <p  class="p-3">Was brean shed moveth day yielding tree yielding day were female and </p>
                                <a class="btn btn-voir-plus m-3">Voir le détail</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a href="{{ route('evenement-details') }}">
                        <div class="card ">
                            <div class="card-img-top">
                                <img src="{{ asset('images/event1.jpg') }}" class="w-100" alt="">
                            </div>
                            <div class="card-body py-5">
                                <div class="row date ">
                                   <div class="col-6">
                                       <p class="text-center"><i class="fa fa-clock-o"> 16/04/2022 à 13h</i></p>
                                   </div>
                                   <div class="col-6">
                                       <p class="text-center"><i class="fa fa-ticket"> 2000 <sup>FCFA</sup></i></p>
                                   </div>
                                </div>
                                <h2 class="text-center">Holly Chill Resurection</h2>
                                <p class="p-3"><i class="fa fa-location-arrow"> Mariella Bora Bora</i> </p>
                                <p  class="p-3">Was brean shed moveth day yielding tree yielding day were female and </p>
                                <a class="btn btn-voir-plus m-3 ">Voir le détail</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card ">
                        <div class="card-img-top">
                            <img src="{{ asset('images/event2.jpg') }}" class="w-100" alt="">
                        </div>
                        <div class="card-body py-5">
                            <div class="row date ">
                               <div class="col-6">
                                   <p class="text-center"><i class="fa fa-clock-o"> 16/04/2022 à 13h</i></p>
                               </div>
                               <div class="col-6">
                                   <p class="text-center"><i class="fa fa-ticket"> 2000 <sup>FCFA</sup></i></p>
                               </div>
                            </div>
                            <h2 class="text-center">Holly Chill Resurection</h2>
                            <p class="p-3"><i class="fa fa-location-arrow"> Mariella Bora Bora</i> </p>
                            <p  class="p-3">Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a class="btn btn-voir-plus m-3">Voir le détail</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row pt-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="card ">
                        <div class="card-img-top">
                            <img src="{{ asset('images/event2.jpg') }}" class="w-100" alt="">
                        </div>
                        <div class="card-body py-5">
                            <div class="row date ">
                               <div class="col-6">
                                   <p class="text-center"><i class="fa fa-clock-o"> 16/04/2022 à 13h</i></p>
                               </div>
                               <div class="col-6">
                                   <p class="text-center"><i class="fa fa-ticket"> 2000 <sup>FCFA</sup></i></p>
                               </div>
                            </div>
                            <h2 class="text-center">Holly Chill Resurection</h2>
                            <p class="p-3"><i class="fa fa-location-arrow"> Mariella Bora Bora</i> </p>
                            <p  class="p-3">Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a class="btn btn-voir-plus m-3">Voir le détail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
