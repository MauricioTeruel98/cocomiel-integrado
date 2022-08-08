@extends('layouts.app')
@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
			@include('includes.message')

			<div class="card pub_image pub_image_detail">
				<div class="card-header">
                    <span>{{$image->description}}</span>
				</div>

				<div class="card-body">
					<div class="image-container image-detail">
						<img src="{{ route('image.file',['filename' => $image->image_path]) }}" />
					</div>

					<div class="description text-center">
						<span class="nickname date">{{''.\FormatTime::LongTimeFilter($image->created_at)}}</span>
						<p>{{$image->description}}</p>
						<p>$ {{ number_format($image->precio, 2, ',', '.') }}</p>
					</div>

					@if(Auth::user() && Auth::user()->id == $image->user->id)
					<div class="actions text-center mb-4">
						<a href="{{ route('image.edit', ['id' => $image->id]) }}" class="btn btn-sm btn-primary">Actualizar</a>
						<!--<a href="{{ route('image.delete', ['id' => $image->id]) }}" class="btn btn-sm btn-danger">Borrar</a>-->

						<!-- Button to Open the Modal -->
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
							Eliminar
						</button>

						<!-- The Modal -->
						<div class="modal" id="myModal">
							<div class="modal-dialog">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header">
										<h4 class="modal-title">¿Estas seguro?</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">
										Si eliminar esta imagen nunca podrás recuperarla, ¿estas seguro de querer borrarla?
									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
										<a href="{{ route('image.delete', ['id' => $image->id]) }}" class="btn btn-danger">Borrar definitivamente</a>
									</div>

								</div>
							</div>
						</div>
					</div>
					@endif

					<div class="clearfix"></div>
				</div>
			</div>


        </div>

    </div>
</div>
@endsection

