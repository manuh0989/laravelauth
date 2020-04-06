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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" 
                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administración
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.posts') }}">
                                    Posts
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.eventos') }}">
                                    Eventos
                                </a>
                            </div>
                        </li>
                    @endadmin
                    
                    <a class="nav-item nav-link {{  Route::current()->uri == '/' ? 'active': '' }}" 
                    href="{{ route('post.index') }}">
                        Posts
                    </a>
                </div>

                @guest
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="{{ route('register') }}">
                            Registrar
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ (url()->current() == '/login') ? 'active' : '' }}" 
                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inicio sesión
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    Usuario
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.login') }}">
                                    Administrador
                                </a>
                            </div>
                        </li>
                        
                    </div>
                @endguest

                @auth
                    @include('compartidos._saludo')
                @endauth
            </div>
        </header>
    </div>
</div>