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
                        <a class="nav-item nav-link  {{ Route::current()->uri == 'admin' ? 'active': '' }}" href="{{ route('admin.index') }}">
                            Administración
                        </a>
                        <a class="nav-item nav-link " href="{{ route('admin.eventos')  }}">Eventos</a>
                    @endadmin
                    
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
                
                @include('compartidos._saludo')
                
                
            </div>
        </header>
    </div>
</div>