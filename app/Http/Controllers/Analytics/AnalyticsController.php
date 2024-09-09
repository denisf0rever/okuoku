<?php

namespace App\Http\Controllers\Analytics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostViews;

class AnalyticsController extends Controller
{
	public function index()
    {
        $articles = Post::query()
			->orderBy('created_at')
            ->get();
			
		$totalArticles = Post::count();
		
		return view('dashboard.analytics.analytics', compact('articles', 'totalArticles'));
    }
	
	public function show(string $id)
	{
        $article = Post::query()
            ->where('id', $id)
            ->firstOrFail();
			
		$dateString = $article->created_at;
		$createdAt = Carbon::parse($dateString);
		\Carbon\Carbon::setLocale('ru');
		
		$date = $createdAt->translatedFormat('j F Y') . ' года';
		
		//$article->view()->increment('views');
		
		$this->incrementView($id);
		
		return view('analytics.analytics', compact('article', 'date'));
    }
}
