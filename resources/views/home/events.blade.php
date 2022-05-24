<div class="container-fluid  py-5 upcoming-event">
    
    <div class="container py-2">
        <div class="menu-title justify-content-center d-flex pb-5">
            <h3>Evènements à venir</h3>
        </div>

        <div class="event-content">
            <div class="row ">
                <div class="col-lg-6 col-md-12">
                    <div class="card-event-desc card-event-desc-left">
                        <h2 data-aos="fade-right">90'S FASHION</h2>
                        <div data-aos="fade-right">
                            <p class="card-event-desc-price"><i class="fa fa-ticket"> 2000 <sup>FCFA</sup></i></p>
                            <p class="card-event-desc-date"><i class="fa fa-clock-o"> 15/05/2022 à 16h</i></p>
                            <p class="card-event-desc-date"><i class="fa fa-location-arrow"> Terrain de Ténis El Dorado</i> </p>
                        </div>
                        <div data-aos="fade-up">
                            <p class="pt-2" >Lorem Ipsum is simply dummy text of the printing 
                                and typesetting industry. Lorem Ipsum has been 
                                the industry's standard dummy text ever since the 1500s.when an unknown printer took a galley of type and scrambled 
                                it to make a type specimen book. It has survived not only five centuries, 
                                but also the leap into electronic typesetting.</p>
    
                            <a  href="{{ route('evenement-details') }}" class="btn btn-voir-plus">Voir le détail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" data-aos="fade-left">
                    <div class="pt-3 card-event">
                        <img src="{{ asset("images/90'S_FASHIONN.jpg") }}" alt="" class="card-event-img d-block w-100">
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="justify-content-center d-flex pt-5">
            <button class="btn btn-voir-plus">Voir plus</button>
        </div> --}}
    </div>    
</div> 