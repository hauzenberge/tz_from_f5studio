<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Auth;
use App\ADS;
use App\Categoty;
use App\Files;

class ADSController extends Controller
{
    public function index(){
    	if (Auth::user()->role_id == 1) {
    		$ads = ADS::all(); 	
    	} else $ads =ADS::where('author_id', '=', Auth::user()->id)->get();

    	return view('admin_panel.ads.index', [
    		'ads' => $ads,
    	]);
    	
    }

    public function edit($id){
    	return view('admin_panel.ads.edit', [
    		'id' => $id,
    		'post' => ADS::find($id),
    	]);
    }
    public function update($id, Request $request){
    	$post = ADS::find($id);

    	$post->title = $request->input('title');

    	$post->price = $request->input('price');

    	if ($request->input('publishet') != null) {
    		$post->publishet = $request->input('publishet');
    	}else $post->publishet = 'no published';
    	
    	$post->text = $request->input('post');

    	$post->category_id = $request->input('category_id');
       
        if ($request->file('image') != null) {
            $post->image = 'storage/app/public/post_images/'.$id.'.png';

            $uploaded = new Files;
            $uploaded->upload('image', $id, 'post_images/', $request);
        }
        

    	$post->save(); 

    	return redirect('/ads/edit/'.$id);
    }

    public function destroyImage($id){
        $post = ADS::find($id);
        $destroy = new Files;
        $destroy->desletefile($post->image);
        $post->image = null;
        $post->save();

        return redirect('/ads/edit/'.$id);

    }

    public function add(){
    	return view('admin_panel.ads.add');
    }

    public function store(Request $request){

    	$post = new ADS;

    	$post->author_id = Auth::user()->id;

    	$post->title = $request->input('title');

    	$post->price = $request->input('price');

    	if ($request->input('publishet') != null) {
    		$post->publishet = $request->input('publishet');
    	}else $post->publishet = 'no published';
    	
    	$post->text = $request->input('post');

    	$post->category_id = $request->input('category_id');

    	$post->save(); 
    	return redirect('/ads');
    }

    public function home(){
        $ads = ADS::where('publishet', '=', 'published')->get();
        //dd($ads);
        return view('index',[
            'posts' => $ads,
            'categories' => Categoty::all(),
        ]);
    }

}