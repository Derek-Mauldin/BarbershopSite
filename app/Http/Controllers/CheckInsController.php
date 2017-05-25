<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckIns;
use App\Http\Controllers\BarberShopsController;

class CheckInsController extends Controller
{
		/*
		 *
		 */
    public function insert(CheckIns $checkIn)
		{
			$checkIn->save();
			return;
		}


		public function getQueueForBarbershop() {

			$queue = CheckIns::where('barbershop_name', auth()->user()->barbershop_name)->get()->sortBy('created_at');

			return view('shopQueue', compact('queue'));
		}


		public function delete(Request $request) {

			CheckIns::destroy($request['qid']);

			$msg = 'Queue Updated';
			session()->flash('success', $msg);

			return redirect('/admin');

		}


		public function checkIn(Request $request)
		{
			$this->validate($request, [
				 'shopName' => 'required',
				 'customerName' => 'required|min:5'

			]);

			$checkIn = new CheckIns;

			$checkIn->barbershop_name = filter_var($request['shopName'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			$checkIn->customer_name = filter_var($request['customerName'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

			$lineCount = CheckIns::where('barbershop_name', $checkIn->barbershop_name)->count();

			$this->insert(($checkIn));

			$msg = 'Hello ' . $checkIn->customer_name . ', You have  successfully checked in at ' . $checkIn->barbershop_name;
			$msg .= '. There are ' . $lineCount . ' people ahead of you';

			session()->flash('success', $msg);

			return redirect('/');
		}


		public function loadWelcome()
		{
			$barberShops = BarberShopsController::getAllBarbershops();

			return view('welcome', compact('barberShops'));
		}

}
