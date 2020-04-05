@extends('layouts.app')

@section('content')

<div class="row d-flex pt-5  mt-4 justify-content-center">
    <div class="col-4 ">
        <div class="card">
            <h5 class="card-header">Admin inicio de sesión</h5>
            <div class="card-body">
                <form action="{{ route('admin.login') }}"  method="POST">
                    @method('POST')
                    @csrf
                    <div class="form-group row">
                        <label for="correo" class="col-sm-3 col-form-label">Correo</label>
                        <div class="col-sm-9">
                            <input type="email" 
                                   class="form-control @error('correo') is-invalid @enderror" 
                                   id="correo" 
                                   name="correo" 
                                   value="{{ old('correo') }}">
                            @error('correo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">
                            Contraseña
                        </label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror " id="password" name="password">
                             @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="recordar" class="col-sm-6 col-form-label">
                            Recordar sesión
                        </label>
                        <input type="checkbox" class="" id="remember" name="remember">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block">
                                Iniciar sesión
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
