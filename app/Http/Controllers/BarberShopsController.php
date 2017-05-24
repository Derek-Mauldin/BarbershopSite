<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use App\BarberShops;

class BarberShopsController extends Controller
{

		//Get all barbershops sort by barbershop_name
    public function getAll()
		{
			$barberShops = BarberShops::all()->sortBy('barbershop_name');

			return view('welcome', compact('barberShops'));
		}

	public function store (Request $request)
	{
		$this->validate($request, [
			 'barberShopName' => 'required|min:5',
		]);

		$barberShop = new BarberShops();
		$barberShop->barbershop_name = filter_var($request['barberShopName'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		$barberShop->save();

		$msg = "New Shop:  ". $barberShop->barbershop_name . " succesfully created";

		session()->flash('success', $msg);

		return redirect('/admin');
	}

}
