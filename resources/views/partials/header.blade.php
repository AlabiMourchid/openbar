<nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
    <div class="container-fluid">
        

        <button class="navbar-toggler text-white border-0 rounded-0" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars s-text-size-sm"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center d-flex" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-5">
                <li class="nav-item"><a href="{{ route('accueil') }}" class="nav-link s-nav-link @if(Route::currentRouteName() == 'accueil') active @endif">Accueil</a></li>
                <li class="nav-item"><a href="{{ route('accueil')."#qui-sommes-nous" }}" class="nav-link s-nav-link ">Qui sommes nous?</a></li>
                <li class="nav-item"><a href="{{ route('menu') }}" class="nav-link s-nav-link @if(Route::currentRouteName() == 'menu') active @endif">Menu</a></li>
                <li class="nav-item logo"> <a class="navbar-brand" href="{{ route('accueil') }}"><img
                    src="{{ asset('images/logo/openbar.png') }}" alt="logo sbpe" class="navbar-logo"></a></li>
                <li class="nav-item"><a href="{{ route('evenement') }}" class="nav-link s-nav-link @if(Route::currentRouteName() == 'evenement') active @endif">Evènements</a></li>
                <li class="nav-item"><a href="{{ route('accueil')."#contact" }}" class="nav-link s-nav-link ">Contact</a></li>
                <li class="nav-item"><a href="" class="nav-link s-nav-link partenaire">Devenir Partenaire</a></li>
            </ul>
        </div>
    </div>
</nav>