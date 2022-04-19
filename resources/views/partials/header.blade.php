<nav class="col navbar navbar-expand-lg  navbar-light bg-white pt-0 pb-0">
    <div class="container-fluid">
        
        <div class="container logo logo-right">
        <a class="navbar-brand" href="{{ route('accueil') }}"><img
                    src="{{ asset('images/logo/openbar.png') }}" alt="logo sbpe" class="navbar-logo"></a>
        </div>
        <button class="navbar-toggler border-0 rounded-0" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a href="{{ route('accueil') }}" class="nav-link s-nav-link @if(Route::currentRouteName() == 'accueil') active @endif">Accueil</a></li>
                <li class="nav-item"><a href="{{ route('accueil').'#qui-sommes-nous' }}" class="nav-link s-nav-link ">Qui sommes nous?</a></li>
                <li class="nav-item"><a href="{{ route('menu') }}" class="nav-link s-nav-link @if(Route::currentRouteName() == 'menu') active @endif">Menu</a></li>
                <li class="nav-item logo logo-center"> <a class="navbar-brand" href="{{ route('accueil') }}"><img
                    src="{{ asset('images/logo/openbar.png') }}" alt="logo sbpe" class="navbar-logo"></a></li>
                <li class="nav-item"><a href="{{ route('evenement') }}" class="nav-link s-nav-link @if(Route::currentRouteName() == 'evenement') active @endif">Evènements</a></li>
                <li class="nav-item"><a href="{{ route('accueil').'#contact' }}" class="nav-link s-nav-link ">Contact</a></li>
                <li class="nav-item"><a href="" class="nav-link s-nav-link partenaire">Devenir Partenaire</a></li>
            </ul>
        </div>
    </div>
</nav>