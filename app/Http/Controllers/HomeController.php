<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function panel()
    {
		$images = Image::orderBy('id', 'desc')->paginate(10);
		
        return view('panel',[
			'images' => $images
		]);
    }

    public function products()
    {
		$images = Image::orderBy('id', 'desc')->paginate(100);
		
        return view('products',[
			'images' => $images
		]);
    }

    public function index(){
        return view('home');
    }

    public function plaza(){
        return view('plaza');
    }

    public function plazaPata(){
      return view('plaza-patapata');
  }
}
