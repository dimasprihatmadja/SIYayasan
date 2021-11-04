<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Hash;

class AuthController extends Controller
{
	public function login()
	{
		return view('login');
	}

	public function cekLogin(Request $request)
	{
		$username = $request->get('username');
		$pass = $request->get('password');
		$check = DB::table('tb_user')->where('username', $username)->count();
		if ($check == null) {
			//return back();
			return view('/login');
		} else {
			$data = DB::table('tb_user')->where('username', $username)->first();
			if (Hash::check($pass, $data->password)) {
				$request->session()->put("id", $data->id);
				return redirect('/home');
			} 
			}
		}

	public function logout(Request $request)
	{
		$request->session()->flush();
		return redirect('/');
	}
}
