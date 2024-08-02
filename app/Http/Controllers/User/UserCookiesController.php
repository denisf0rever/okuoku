<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\JsonResponse;

class UserCookiesController extends Controller
{
    public function setCookie(Request $request)
    {
		$mail = $request->mail;
		
        Cookie::queue(Cookie::make('chat_cookie', $mail, 4320));
		
		return response()->json(['message' => 'Куки установлено']);
	}    
	
	public function getCookie()
    {
		$cookie = Cookie::get('chat_cookie');
		
		return response()->json(['mail' => $cookie]);
    }
	
	public function removeCookie(Request $request)
    {
		$mail = $request->mail;
		
        Cookie::queue(Cookie::make('chat_cookie', $mail, -1));
		
		return response()->json(['message' => 'Куки обновлены']);
    }
}
