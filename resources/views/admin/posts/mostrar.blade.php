@extends('layouts.app')
@section('content')
	<div class="row d-flex pt-5  mt-4 ">
		<div class="col-12">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Titulo</th>
						<th scope="col">Contenido</th>
						<th scope="col">Publicado</th>
						<th scope="col">Principal</th>
						<th scope="col">Fecha creación</th>
					</tr>
				</thead>
  				<tbody>
  					@foreach($posts as $key =>$post)
						<tr class="text-center">
							<th scope="row">{{ ($key+1) }}</th>
							<td>{{ $post->titulo }}</td>
							<td>
								<a href="#" class="btn-link">Ver contenido</a>
							</td>
							<td>
								<input type="checkbox"  
									data-toggle="toggle"  
									{{   $post->isPublicado() ? 'checked':'' }}>
							</td>
							<td>
								<input type="checkbox"  
									data-toggle="toggle"  
									{{   $post->isPrincipal() ? 'checked':'' }}>
							</td>
							<td>
								{{ $post->created_at }}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
			{{ $posts->links() }}
		</div>
	</div>
@endsection