@extends('layouts.app')
@extends('layouts.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

			<div class="card">
				<div class="card-header">Subir nuevo Producto</div>


				<div class="card-body">

					<form method="POST" action="{{ route('image.save') }}" enctype="multipart/form-data">
						@csrf

						<div class="form-group row">
							<label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
							<div class="col-md-7">
								<input id="image_path" type="file" name="image_path" class="form-control {{ $errors->has('image_path') ? 'is-invalid' : '' }}" required/>

								@if($errors->has('image_path'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('image_path') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="description" class="col-md-3 col-form-label text-md-right">Descripción</label>
							<div class="col-md-7">
								<textarea id="description" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" required></textarea>

								@if($errors->has('description'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="precio" class="col-md-3 col-form-label text-md-right">Precio</label>
							<div class="col-md-7">
								<input type="number" id="precio" name="precio" class="form-control {{ $errors->has('precio') ? 'is-invalid' : '' }}" required/>

								@if($errors->has('precio'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('precio') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							
							<div class="col-md-6 offset-md-3">
								<input type="submit" class="btn btn-primary" value="Publicar">
							</div>
						</div>


					</form>

				</div>
			</div>

        </div>
    </div>
</div>

@endsection