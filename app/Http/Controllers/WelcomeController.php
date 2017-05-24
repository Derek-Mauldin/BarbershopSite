<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckIns;

class WelcomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$this->validate($request, [
				 'shopName' => 'required',
				 'customerName' => 'required|min:5'

			]);

			$checkIn = new CheckIns;

			$checkIn->barbershop_name = filter_var($request['shopName'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			$checkIn->customer_name = filter_var($request['customerName'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

			$checkIn->save();
			$msg = 'Hello ' . $checkIn->customer_name . ', You have  successfully checked in at ' . $checkIn->barbershop_name;

			session()->flash('success', $msg);

			return redirect('/');
		}

}
