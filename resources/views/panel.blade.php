@extends('layouts.app')
@extends('layouts.header')

@section('content')
<div class="container">
	@include('includes.message')

	<div class="text-center mb-4">
		<h1>Panel de productos</h1>
	</div>

	<table class="table table-hover">

		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Imagen</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>

		@foreach($images as $image)
		@include('includes.image',['image'=>$image])
		@endforeach

	</table>

	<!-- PAGINACION -->
	<div class="clearfix"></div>
	{{$images->links()}}

</div>
@endsection