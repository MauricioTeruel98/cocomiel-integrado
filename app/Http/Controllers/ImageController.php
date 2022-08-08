<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Image;

class ImageController extends Controller
{
	public function __construct(){

    }
	
	public function create(){
		return view('image.create');
	}
	
	public function save(Request $request){
		
		//Validación
		$validate = $this->validate($request, [
			'description' => 'required',
			'image_path'  => 'required|image',
			'precio' => 'required'
		]);
		
		// Recoger datos
		$image_path = $request->file('image_path');
		$description = $request->input('description');
		$precio	= $request->input('precio');
		
		// Asignar valores nuevo objeto
		$user = \Auth::user();
		$image = new Image();
		$image->user_id = $user->id;
		$image->description = $description;
		$image->precio = $precio;
		
		// Subir fichero
		if($image_path){
			$image_path_name = time().$image_path->getClientOriginalName();
			Storage::disk('images')->put($image_path_name, File::get($image_path));
			$image->image_path = $image_path_name;
		}
		
		$image->save();
		
		return redirect()->route('panel')->with([
			'message' => 'La foto ha sido subida correctamente!!'
		]);
	}
	
	public function getImage($filename){
		$file = Storage::disk('images')->get($filename);
		return new Response($file, 200);
	}
	
	public function detail($id){
		$image = Image::find($id);
		
		return view('image.detail',[
			'image' => $image
		]);
	}
	
	public function delete($id){
		$user = \Auth::user();
		$image = Image::find($id);
		
		if($user && $image && $image->user->id == $user->id){
			
			// Eliminar ficheros de imagen
			Storage::disk('images')->delete($image->image_path);
			
			// Eliminar registro imagen
			$image->delete();
			
			$message = array('message' => 'La imagen se ha borrado correctamente.');
		}else{
			$message = array('message' => 'La imagen no se ha borrado.');
		}
		
		return redirect()->route('panel')->with($message);
	}
	
	public function edit($id){
		$user = \Auth::user();
		$image = Image::find($id);
		
		if($user && $image && $image->user->id == $user->id){
			return view('image.edit', [
				'image' => $image
			]);
		}else{
			return redirect()->route('home');
		}
	}
	
	public function update(Request $request){
		//Validación
		$validate = $this->validate($request, [
			'description' => 'required',
			'image_path'  => 'image'
		]);
		
		// Recoger datos
		$image_id = $request->input('image_id');
		$image_path = $request->file('image_path');
		$description = $request->input('description');
		$precio	= $request->input('precio');
		
		// Conseguir objeto image
		$image = Image::find($image_id);
		$image->description = $description;
		$image->precio = $precio;
		
		// Subir fichero
		if($image_path){
			$image_path_name = time().$image_path->getClientOriginalName();
			Storage::disk('images')->put($image_path_name, File::get($image_path));
			$image->image_path = $image_path_name;
		}
		
		// Actualizar registro
		$image->update();
		
		return redirect()->route('image.detail', ['id' => $image_id])
						 ->with(['message' => 'Imagen actualizada con exito']);
	}
	
}
