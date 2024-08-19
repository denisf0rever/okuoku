<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
			->orderBy('id')
            ->get();
			
		$totalUsers = User::count();

		return view('dashboard.user.list', compact('users', 'totalUsers'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string',
            'middle_name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
			'avatar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
		
		$data['password'] = bcrypt($data['password']);
		
		//$user = User::create($data);
			
		
		
		
		
		/*if ($user) {
			return redirect()->route('dashboard.user.edit', ['id' => $user->id])->with('user_added', 'Пользователь успешно добавлен');
		} else {
			return redirect()->back()->with('user_added', 'Пользователь не добавлен');
		}*/
    }

    public function store(Request $request)
    {
        return view('dashboard.user.add-user');
    }

    public function show(string $id)
    {
		$user = User::query()
			->where('id', $id)
			->firstOrFail();
			
		$user->increment('views');

		return view('user.profile.item', compact('user'));
    }
	
    public function edit(string $id)
    {
        $user = User::query()
			->where('id', $id)
            ->firstOrFail();

		return view('dashboard.user.edit-user', compact('user'));
    }
	
    public function update(Request $request, string $id)
    {
        //
    }
	
    public function destroy(string $id)
    {
        //
    }
}
