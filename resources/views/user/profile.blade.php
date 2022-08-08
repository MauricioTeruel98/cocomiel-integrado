@extends('layouts.app')
@extends('layouts.header')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">

			<div class="profile-user">

				@if($user->image)
				<div class="container-avatar">
					<img src="{{ route('user.avatar',['filename'=>$user->image]) }}" class="avatar" />
				</div>
				@endif

				<div class="user-info">
					<h1>{{'@'.$user->nick}}</h1>
					<h2>{{$user->name .' '. $user->surname}}</h2>
					<p>{{'Se unió: '.\FormatTime::LongTimeFilter($user->created_at)}}</p>
				</div>

				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>

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

				@foreach($user->images as $image)
				@include('includes.image',['image'=>$image])
				@endforeach

			</table>


		</div>

	</div>
</div>
@endsection