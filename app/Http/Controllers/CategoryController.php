<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoty;
use DB;

class CategoryController extends Controller
{
     public function index(){
    	return view('admin_panel.categoties.index',[
    		'categories' => Categoty::all(),
    	]);
    }

    public function edit($id){   	
    	return view('admin_panel.categoties.edit',[
    		'category' => Categoty::find($id),
    	]);
    }
    public function update($id, Request $request){
    	$category = Categoty::find($id);
    	$category->name = $request->input('title');
    	$category->save();

    	return redirect('/categories/edit/'.$id);
    }
    public function add(){
    	return view('admin_panel.categoties.add');
    }
    public function store(Request $request){
    	$category = new Categoty;
    	$category->name = $request->input('title');
    	$category->save();   	

    	return redirect('/categories');
    }
    public function destroy($id){
    	DB::delete('delete from category where id = ?', [$id]);
    	DB::delete('delete from ads where category_id = ?', [$id]);
    	return redirect('/categories');

    }
}
