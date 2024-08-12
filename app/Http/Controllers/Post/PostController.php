<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Post::query()
			->orderBy('created_at')
            ->take(10)
            ->get();
		
		return view('dashboard.articles.articles', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
		$data = $request->validate([
            'h1' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'author_id' => 'required|integer|max:255',
            'reading_time' => 'required',
            'category' => 'required|integer|max:2',
            'short_text' => 'required|string',
            'content' => 'required|string',
            'full_text' => 'required|string',
			'image' => 'required|image'
        ]);
		
		$year = date('Y') .'/' . date('m');
			
		$path = $request->file('image')->store('public/article/' . $year);
		
		$article = Post::create([
                'h1' => $data['h1'],
                'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'metadescription' => $data['metadescription'],
				'metakey' => $data['metakey'],
				'author_id' => $data['author_id'],
				'reading_time' => $data['reading_time'],
				'category' => $data['category'],
				'short_text' => $data['short_text'],
				'content' => $data['content'],
				'full_text' => $data['full_text'],
				'thumb' => $path
            ]);
		
		
		if ($article) {
			 return redirect()->route('dashboard.article.edit', ['id' => $article->id])->with('success', 'Пост успешно создан');
		} else {
			return redirect()->back()->withInput($this->all());
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

		return view('articles.item', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $article = Post::query()
            ->where('id', '=', $id)
            ->firstOrFail();

		return view('dashboard.articles.edit-article', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
		$year = date('Y');
		$mounth = date('m');
			
		$path = $request->file('image')->store('public/article/' . $year .'/' . $mounth);
		
        $data = $request->validate([
            'h1' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'author_id' => 'required|integer|max:5',
            'reading_time' => 'required',
            'category' => 'required|integer|max:2',
            'short_text' => 'required|string',
            'content' => 'required|string',
            'full_text' => 'required|string',
			'image' => 'required|image'
        ]);
		
		$path = $request->file('image')->store('public/article/' . $year);
		
	    $article = Post::query()
            ->where('id', '=', $id)
            ->firstOrFail();
	   
	    $article->h1 = $request->input('h1');
		$article->title = $request->input('title');
		$article->subtitle = $request->input('subtitle');
		$article->metadescription = $request->input('metadescription');
		$article->metakey = $request->input('metakey');	    
		$article->author_id = $request->input('author_id');
		$article->reading_time = $request->input('reading_time');
		$article->category = $request->input('category');
		$article->short_text = $request->input('short_text');
		$article->content = $request->input('content');
		$article->full_text = $request->input('full_text');
		$article->thumb = $path;
		$article->save();
		
		return redirect()->back()->with('success', 'Пост успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
