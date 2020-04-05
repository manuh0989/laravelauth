<div class="navbar-nav ml-auto">
    <a class="nav-item nav-link " href="">

        Bienvendi@: {{ auth()->user()->nombre }}
        <span class="sr-only"></span>
    </a>
    
    <form action="{{  route( Request::segment(1) == 'admin' ? 'admin.logout' :'logout' ) }}" method="POST" id="frmLogout">
        @csrf
        <a class="nav-item nav-link" id="link-logout" style="cursor: pointer;">
            Salir
        </a>
    </form>
</div>