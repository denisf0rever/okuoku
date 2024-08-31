<?php

namespace App\Services;

use Illuminate\Http\Request;

final class UserService
{
	 public function createUser(array $userData, Request $request = null)
	 {
		 $data = $request->validate([
            'email' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string',
            'middle_name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
			'is_priority' => 'string',
			'is_active' => 'string',
			'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
			'webp_avatar' => 'image|mimes:webp|max:2048'
        ]);
		
		if ($request->hasFile('avatar')) {
			$imagePath = $request->file('avatar')->store('public/avatar');
			$avatarImage = Str::of($imagePath)->basename();
			
		}
		if ($request->hasFile('avatar_webp')) {
			$webpPath = $request->file('avatar_webp')->store('public/avatar/webp');
			$avatarWebp = Str::of($webpPath)->basename();
		}
		
		$is_priority = $request->has('is_active') ? 1 : 0;
		$is_active = $request->has('is_active') ? 1 : 0;
		
		$user = User::create([
			'email' => $data['email'],
			'username' => $data['username'],
			'password' => Hash::make($data['password']),
			'name' => $data['name'],
			'last_name' => $data['last_name'],
			'middle_name' => $data['middle_name'],
			'city' => $data['city'],
			'phone' => $data['phone'],
			'is_priority' => $is_priority,
			'is_active' => $is_active,
			'avatar' => $avatarImage,
			'webp_avatar' => $avatarWebp
		]);
			
		return $user;
	 }
}
