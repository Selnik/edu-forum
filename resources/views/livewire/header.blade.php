<div>
    <nav class="navbar navbar-light navbar-expand-md" style="border-radius: 0;box-shadow: inset 0px -1.3px 2px rgb(24,24,24);border-color: rgb(39,41,44);border-bottom: 1.2px inset rgb(0,0,0);">
        <div class="container-fluid"><a class="navbar-brand" href="{{route('home')}}"><strong>Edu</strong>Forum</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                @if(!Auth::check())
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active border-primary" href="{{route('register')}}">Registrovat</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Přihlásit se</a></li>
                    </ul>
                    @endif
            </div>
            @if(Auth::check())
                <div class="dropdown"><a class="dropdown-toggle fw-bold" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="text-decoration: none;color: rgb(0,0,0);">{{$user->name}}</a>
                    <div class="dropdown-menu text-center" style="padding-right: 1em;">
                        <div class="dropdown-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="btn" data-bss-hover-animate="pulse" type="submit">Odhlásit se</button>
                        </form>
                        </div>
                    </div>
                </div>
            @endif
            </div>
    </nav>
</div>
