<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()
			->orderBy('ASC')
            ->take(10)
            ->get();
		
		return view('dashboard.posts.post-list', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
		$data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakeys' => 'required|string|max:255',
            'author_id' => 'required|integer|max:5',
            'reading-time' => 'required|integer',
            'category' => 'required|integer|max:2',
            'short-text' => 'required|string',
            'full-text' => 'required|string',
			'image' =>  'required|image'
        ]);
		
		$path = $request->file('image')->store('post');
		
		$post = Post::create([
                'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'metadescription' => $data['metadescription'],
				'metakeys' => $data['metakeys'],
				'author_id' => $data['author_id'],
				'reading-time' => $data['reading-time'],
				'category' => $data['category'],
				'short-text' => $data['full-text'],
				'full-text' => $data['full-text'],
				'thumb' => $path
            ]);
		
		
		if ($post) {
			
			return redirect()->route('dashboard.posts');
		}
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Post::query()
            ->where('id', '=', $id)
            ->firstOrFail();

     return view('article.item', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
