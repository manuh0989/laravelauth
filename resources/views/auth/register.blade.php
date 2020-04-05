@extends('layouts.app')

@section('content')
    <div class="row d-flex pt-5  mt-4 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Registro</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-3 col-form-label">
                                Nombre
                            </label>

                            <div class="col-md-9">
                                <input id="nombre" 
                                        type="text" 
                                        class="form-control @error('nombre') is-invalid @enderror" 
                                        name="nombre" 
                                        value="{{ old('nombre') }}">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="correo" class="col-sm-3 col-form-label">
                                Correo
                            </label>

                            <div class="col-md-9">
                                <input id="correo" 
                                        type="email" 
                                        class="form-control @error('correo') is-invalid @enderror" 
                                        name="correo" value="{{ old('correo') }}">

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

                            <div class="col-md-9">
                                <input id="password" 
                                        type="password" 
                                        class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-3 col-form-label">
                                Confirme su contraseña
                            </label>

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-secondary btn-block">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
