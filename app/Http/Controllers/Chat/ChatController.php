<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
	{
		return view('chat.main');
	}
	
	public function endPoint(Request $request)
	{
		return 'ok';
	}
}
