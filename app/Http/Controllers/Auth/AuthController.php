<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect(route('dashboard.main'));
        }

        return view('login');
    }
	
	public function authenticate(AuthRequest $request)
	{
		$credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required']
        ]);
		
		if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
			
			if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            return redirect(route('dashboard.main'));
        }

        return redirect(route('login'))->withErrors(['email' => 'Пользователь не найден']);
		}
	}

    public function logout(AuthRequest $request)
    {
        Auth::logout();
 
		$request->session()->invalidate();
 
		$request->session()->regenerateToken();
 
		return redirect('/');
    }
}
