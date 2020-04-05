<div class="row">
    <div class="col-12">
        <header class="navbar fixed-top  navbar-expand-lg  navbar-dark bg-dark">
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarNavAltMarkup" 
                    aria-controls="navbarNavAltMarkup" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                
                    @admin
                        <a class="nav-item nav-link " href="{{ route('admin_dashboard') }}">
                            Administración
                        </a>
                    @endadmin
                    
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
                @guest
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link " href="{{ route('login') }}">
                            Iniciar sesion 
                            <span class="sr-only"></span>
                        </a>
                        <a class="nav-item nav-link" href="{{ route('register') }}">Registrar</a>
                    </div>
                @endguest
                @auth
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link " href="{{ route('index') }}">
                            Bienvendi@: {{ auth()->user()->nombre }}
                            <span class="sr-only"></span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" id="frmLogout">
                            @csrf
                            <a class="nav-item nav-link" id="link-logout" style="cursor: pointer;">
                                Salir
                            </a>
                        </form>
                    </div>
                @endauth
            </div>
        </header>
    </div>
</div>