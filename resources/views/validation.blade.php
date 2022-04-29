@extends('layouts.template')

@section('title')
    Open Bar - Validation
@endsection

@section('content')
    <div class="container justify-content-center d-flex">
        <div class="card validation-content ">
            <div class="card-body p-5 ">
                <img src="{{ asset('images/sourire.svg') }}" alt="">
                <div class="validation-text pt-4">
                    <h3 class="text-center">Paiement Réussi ! <i class="fa fa-check-circle-o"></i></h3>
                    <p class="text-justify">Votre ticket vous sera envoyé à votre email comme un  code Qr que vous allez présenter le jour J</p>
                </div>
            </div>
        </div>
    </div>
@endsection

