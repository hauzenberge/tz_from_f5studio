<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\EmailSeeding;
use DB;
use Auth;
use App\Files;

class UserController extends Controller
{
    public function index(){
    	return view('admin_panel.settigns.users.index',[
    		'users' => User::all(),
    	]);
    }
    public function edit($id){
    	return view('admin_panel.settigns.users.edit',[
    		'user' => User::find($id),
    	]);
    }
    public function update($id, Request $request)
    {
    	$user = User::find($id);
    	$user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->role_id = $request->input('role_id');
    	$user->email = $request->input('email');
    	if ($request->input('password') != null) {
    		$user->password = $request->input('password');
    	}
    	$user->save();
    	return redirect('/users/user/edit/'.$id);
    }

    public function destroy($id){
        DB::delete('delete from ads where author_id=?', [$id]);
    	if ($id == Auth::user()->id) {
    		DB::delete('delete from users where id=?', [$id]);
    		$this->middleware('guest')->except('logout');
    		return redirect('/');
    	}else{
    		DB::delete('delete from users where id=?', [$id]);
    		return redirect('/users');
    	}
    }

    public function add(){
    	return view('admin_panel.settigns.users.add');
    }

    public function store(Request $request)
    {
    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));
    	$user->save();

    	$send = new EmailSeeding;
    	$send->send("System", $request->input('email'), $request->input('massege').'<br>Login: '.$request->input('email').'<br>Password: '.$request->input('password'));

    	return redirect('/users');
    }
}