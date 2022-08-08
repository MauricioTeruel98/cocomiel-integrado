<tbody>
	<tr>
		<th  style="vertical-align: middle;" scope="row">{{$image->id}}</th>
		<td  style="vertical-align: middle;"><img src="{{ route('image.file',['filename' => $image->image_path]) }}" width="100px" /></td>
		<td  style="vertical-align: middle;">{{$image->description}}</td>
		<td  style="vertical-align: middle;">$ {{ number_format($image->precio, 2, ',', '.') }}</td>
		<td style="vertical-align: middle;">
		<div class="comments">
			<a href="{{ route('image.detail', ['id' => $image->id])}}" class="btn btn-sm btn-warning btn-comments">
				Detalles
			</a>
		</div>
		</td>
	</tr>
</tbody>