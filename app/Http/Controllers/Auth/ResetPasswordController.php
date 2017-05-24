<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Auth;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function reset()
		{
			return view('auth.passwords.reset');
		}

		public function update(Request $request) {

			$this->validate($request, [
				 'email' => 'required|string|email|max:255',
				 'password' => 'required|string|min:6|confirmed',
				 'password_confirmation' => 'required|string|min:6|'
			]);

			$password = filter_var($request['password'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

			$user = User::find(Auth::user()->id);
			$user['password'] = bcrypt($password);

			$user->update();
			$msg = 'password changed';
			session()->flash('success', $msg);

			return redirect('/admin');

		}

}
