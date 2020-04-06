@extends('layouts.app')

@section('content')

	<div class="row d-flex pt-4  mt-5 justify-content-center">
		<div class="col-8">
			@if (session('alert'))
				<div class="alert alert-success">
					{{ session('alert') }}
				</div>
			@endif
			<form action="{{ route('post.store') }}" method="POST">
				@csrf
				<div class="form group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control @error('titulo') is-invalid @enderror " id="titulo" name="titulo">
					@error('titulo')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror					
				</div>
				<div class="form group">
					<label for="titulo">Contenido</label>
					<textarea 
						class="form-control" 
						id="summary-ckeditor" 
						name="contenido"></textarea>

						@error('contenido')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
				</div>
				<div class="form group">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="principal" name="principal[]" value="off">
						<label class="custom-control-label" for="principal">
							Post principal
						</label>
						@error('principal')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>
				<button type="submit" class="btn btn-secondary btn-block">Guardar</button>
			</form>
		</div>
	</div>
@endsection