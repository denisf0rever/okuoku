<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;

class CatergoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PostCategory::query()
			->orderBy('id')
            ->get();
		
		return view('dashboard.articles.categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'h1' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'metadescription' => 'required|string|max:255',
            'metakey' => 'required|string|max:255',
            'description' => 'required|string',
            'short_title' => 'required|string|max:255',
            'slug' => 'required|string|max:255'
        ]);
		
		$category = PostCategory::create([
                'h1' => $data['h1'],
                'title' => $data['title'],
				'meta_description' => $data['metadescription'],
				'meta_keywords' => $data['metakey'],
				'description' => $data['description'],
				'short_title' => $data['short_title'],
				'slug' => $data['slug']
            ]);
			
		return redirect()->back()->withInput($this->all());
			
		//if ($category) {
		//	 return redirect()->route('dashboard.article.edit', ['id' => $article->id])->with('post_added', 'Пост успешно обновлен');
	//	} else {
	//		return redirect()->back()->withInput($this->all());
	//	}
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
		$category = PostCategory::query()
            ->where('id', '=', $id)
            ->firstOrFail();
			
        $categories->increment('views');
		
		return view('categories.item', ['category' => $category]);
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
