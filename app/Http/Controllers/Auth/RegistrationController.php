<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistrationController extends Controller
{
    public function show()
	{
        return view('user.register');
	}
	
	public function register(Request $request)
    {
		$data = $request->validate([
            'id' => 'required|string',
            'username' => 'required|string',
            'role' => 'required|string',
            'email' => 'email|string',
            'password' => 'required|string',
            'first_name' => 'nullable|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'nullable|string'
        ]);

        $user = User::query()
            ->create([
                'id' => $data['id'],
                'username' => $data['username'],
                'role' => $data['role'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'first_name' => $data['first_name'] ? $data['first_name'] : NULL,
                'middle_name' => $data['middle_name'] ? $data['middle_name'] : NULL,
                'last_name' => $data['last_name'] ? $data['last_name'] : NULL
            ]);

        if ($user) {
            Auth::guard('admin')->login($user);
            $request->session()->regenerate();
        }

        return redirect()->route('consultation');
    }
}
