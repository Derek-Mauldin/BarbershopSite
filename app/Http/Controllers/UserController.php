<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\BarberShopsController;

class UserController extends Controller
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function loadUpdate()
		{
			$barberShops = BarberShopsController::getAllBarbershops();

			return view('updateProfile', compact('barberShops'));
		}

	public function update (Request $request)
	{

		$this->validate($request, [
			 'name' => 'required|string|max:255',
			 'email'=>'required|email|unique:users,email,'. Auth::user()->id,
			 'barbershop_name' => 'required'
		]);

		$user = User::find(Auth::user()->id);

		$user->name = filter_var($request['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		$user->barbershop_name = filter_var($request['barbershop_name'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if($request['email'] !== Auth::user()->email);
			$user->email = filter_var($request['email'], FILTER_SANITIZE_EMAIL, FILTER_FLAG_NO_ENCODE_QUOTES);

		$user->save();
		$msg =  'Password Udate successful';

		session()->flash('success', $msg);

		return redirect('/admin');

	}

}
